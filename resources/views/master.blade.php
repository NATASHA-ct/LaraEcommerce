<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>LaraEcommerce</title>
</head>
<body style="height: 100vh">
    {{View::make('header')}}

    <main class="mb-5">
       @yield('content')  
    </main>
   
    {{View::make('footer')}}
</body>
<style>
    /* layout */
  
    html {
    scroll-behavior: smooth;
    width: 100%;
    box-sizing: border-box;
    }

    a{
        text-decoration: none;
    }

    body {
    margin: 0;
    height: 100%;
    }

    *,
    *::before,
    *::after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
    }
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }

    .slider-text{
        color: black;
    }
    .custom-product{
        margin:2em;
        margin-bottom: 5em;
        height: 600px;
    }

    #demo{
        background-color:#fff;
    }

    .slider-text{
      background-color: #e3e0e621 !important;
      width: 50%;   
      margin-left: 35%;
    }

    .trend-title{
      text-align: center;
      margin: 2em 0;
    }

    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
       display: flex;
       justify-content: space-evenly;
 
    }

    .trend-prod-name{
        color: black;
        text-decoration: none;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    main{
        margin-bottom: 3em;
    }

    .cart-custom-product{
      margin:2em 3em;  
    }

    .cart-wrapper{
      display: flex;
      justify-content: space-evenly;
      flex-direction: column;
      
    }
    .logs{
        display:flex;
        flex-direction: column;
    }
</style>
</html>