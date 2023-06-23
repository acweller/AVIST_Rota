# AVIST_Rota
Rota das Vinícolas de Santa Teresa - AVIST (Laravel)

# Preparação do ambiente de desenvolvimento (início codificação)

Deve-se seguir os seguintes passos para iniciar o desenvolvimento.

* Baixar projeto do GitHub
* Instalar e iniciar o Docker
* Acessar a pasta com o projeto Laravel/Sail
* Executar os seguintes comandos:

    ```bash
        # Fazer uma Build sem utilizar o cache
        ./vendor/bin/sail build --no-cache

        # Para iniciar o container após a realização do Build
        ./vendor/bin/sail up -d --build

        # Fazer a Migration do BD (criação das tabelas e registros)
        ./vendor/bin/sail artisan migrate:fresh --seed

        # Para encerrar a execução do sistema
        ./vendor/bin/sail down
    ```

* Para acessar o site: [http://localhost:8080](http://localhost:8080)

# Pastas do projeto


# Implantação em produção

Primeiro, ir ao painel de controle do site de hospedagem e cadastrar senha para o FTP e/ou do SSH.

## Criar o arquivo compactado (Maq Local)
    cd ~/github
    tar --exclude='.git' -cvzf AVIST_Rota.tar.gz AVIST_Rota

* Enviar via FileZilla

## Acessar via SSH e descompactar
    ssh usuario@dominio.site.hospedagem
    mkdir ~/apps
    mv -v AVIST_Rota.tar.gz ~/apps
    cd ~/apps
    ls

## Descompactar dentro da pasta "apps" (Criar se não existir)
    DOMINIO_SITE="xxxxx.com.br"
    tar -xvzf AVIST_Rota.tar.gz
    mv -v AVIST_Rota $DOMINIO_SITE
    rm -vi AVIST_Rota.tar.gz
    cd ..

## Conferir versão atual do PHP
    php -v

## Criar um link simbólico da pasta WWW para o PUBLIC
    mv www www_old -vi
    ln -s ~/apps/$DOMINIO_SITE/public ~/www
    cd ~/apps/$DOMINIO_SITE/

## Instalando o Composer na pasta do site (onde está composer.json): 
Conferir e atualizar passos de: https://getcomposer.org/download/

    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

## Gerar uma senha aleatória para o BD e anotar no .env.production (maq. local)
    cat /dev/urandom | tr -dc A-Za-z0-9 | head -c 20 ; echo ' '

## Criar o BD (via Painel de Controle) e anotar o nome do BD e do User no .env
BDname / UserName

## Em .env (de produção) "DB_HOST" colocar o link para o BD
mysql.$DOMINIO_SITE

## Mudar o APP_ENV para "production"
APP_ENV=production

## Ajustar o "APP_URL" para o site:
https://$DOMINIO_SITE

## Em produção, substituir ".env" por ".env.production":
    mv .env.production .env -vi
    rm .env.example -vi

## Instalando as dependências do projeto com o COMPOSER
    php composer.phar -V
    php composer.phar install --no-dev
    php composer.phar update --no-dev

## Gerar uma Chave criptografica para o site em produção (na pasta do site)

    php artisan -V
    php artisan key:generate

* Ver: https://youtu.be/VDD7igukEdI
* Abrir o ".env" e copiar o código para ".env.production" (Máq Local).  Copiar e gravar essa chave "base64:" no APP_KEY de .env (de produção)

## Secure .env (Para proteger .ENV, modificar o .HTACCESS)

    <Files .env>
        Order deny,allow
        Deny from all
    </Files>

* Incluir no arquivos "Public/.htaccess" essa proteção:
* Ver: https://youtu.be/vUXKe-vhUik

## Em produção, substituir o ".htaccess" por ".htaccess.production"
    cd public
    mv .htaccess.prod .htaccess -vi

## Substituir (em produção) o robots.txt
    mv robots.txt.prod robots.txt -vi

## Migrar o banco de dados em produção (na pasta inicial do site )
    cd ..
    php artisan migrate:fresh --seed
