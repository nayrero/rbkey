<!DOCTYPE html>
<html lang="ru">
<head>
    @section('head')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ООО Инфокон</title>
        <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">    
        <link rel="stylesheet" href="{{ asset("css/main.css") }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="{{ asset("css/all.css") }}" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    @show
</head>
<body>
    @section('header')
        <header class="header">          
            <div class="nav-bar" id="navbar">
                <div class="container menu">
                    <div class="row justify-content-center">                    
                        <div class="col align-item-center">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand logo" href="http://localhost:8000/">
                                    <img src="{{ asset("img/main-logo.png") }}" width="140" height="40" alt="логотип"> 
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                    <ul class="navbar-nav mr-auto">                  	
                                        <li class="nav-item">
                                            <a href="/" class="nav-link active">Главная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services" class="nav-link active">Услуги</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq" class="nav-link active">Частые вопросы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contacts" class="nav-link active">Где мы находимся</a>
                                        </li>
                                        <li class="nav-item mr-lg-5">
                                            <a href="about" class="nav-link active">О компании</a>
                                        </li>                        
                                        <li class="nav-item ml-lg-5">
                                            <div class="phone">                                
                                                <a class="nav-link active" href="tel:+73012277577">
                                                <div>Звоните нам:</div>                              
                                                <div>+7 (3012) 277-577</div>                              
                                                </a>
                                            </div>
                                        </li>
                                    </ul>                                   
                                </div>  
                            </nav>             
                        </div>                                
                    </div>
                </div>
            </div>
        </header>
    @show

    @section('content')
    @show

    @section('footer')
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-auto col-md align-self-center">
                        <div class="footer_copy">© 2000-2021 ООО "Инфокон"</div>
                    </div>
                    <div class="col-auto col-md align-self-center">
                        <h5>Наш основной офис:</h5>
                        <p>г. Улан-Удэ<br>
                            Сахьяновой ул., д.3, оф. 120,220<br>
                            ост. "Налоговая № 1"<br>                            
                            +7 (3012) 277-577<br>
                            E-mail: Info@rbkey.ru
                        </p>
                    </div>
                   
                </div>	
            </div>
        </footer>
    @show

    @section('scripts')           
    @show
</body>
</html>