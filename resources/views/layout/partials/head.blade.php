<style>
    .carousel-item{
        background-repeat: no-repeat;
        background-position: 50% center;
        background-size: 100vw;
        width: auto;
        height: 50vw;
    }
    .carousel-item:before{
        content: "";
        background-image:
            linear-gradient(
                to bottom,
                transparent, rgba(0,0,0,0.5)
            );
        display: block;
        position: relative;
        top: 0;
        width: auto;
        height: 50vw;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }
    .fa-twitter {
        background: #55ACEE;
        color: white;
    }
    .fa-youtube {
        background: #bb0000;
        color: white;
    }
    .fa-instagram {
        background: #125688;
        color: white;
    }   
</style>

@yield('estilo')


<meta charset="UTF-8">
<title>Rota das Vinícolas de Santa Teresa - Avist</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.0/dist/cosmo/bootstrap.css" integrity="sha256-zCydQT2IqMdl9pibwfv2lNQ8XGLQ+PmovW0autP6ER0=" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.0/dist/cosmo/bootstrap.min.css" integrity="sha256-1QMn0orFWnN6ZvqKlZCpabeY9PAvvIFcVndIneDMNeU=" crossorigin="anonymous">

<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/7d27d0ac60.js" crossorigin="anonymous"></script>

<!-- Custom styles for this template -->
<link href="/css/album.css" rel="stylesheet">
