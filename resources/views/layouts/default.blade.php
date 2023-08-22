<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.cdnfonts.com/css/seasons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .embed-responsive-100x400px {
        padding-bottom: 0px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .nav-link:hover {
        border-top: 2px solid #9dbbdf
    }
    </style>


</head>

<body>
<div id="header">
        @include('includes.header')
        <!--header kısmının bulunduğu dosyayı dahil eder -->
    </div>

    </div>
    <div id="main">
        @yield('content')
        <!--içerik eklemmek için@sections ile kullanılır -->
    </div>
    
    <div  id="footer">
    @include('includes.footer')
        <!--header kısmının bulunduğu dosyayı dahil eder -->

    </div>
</body>

</html>