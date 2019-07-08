<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="./public/css/toastr.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./public/images/logo.png">
    <title>Cristina Bizoi | Portfolio</title>
</head>
<body>
    <header id="header-section">
            <nav class="navbar navbar-expand-md  fixed-top">
            <div class="container">
                <a class="navbar-brand gradient-color" href="#">Cristina Bizoi</a>
                <button class="navbar-toggler "  id="btn-nav"  type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1 active-section" href="#section-home">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gradient-color " href="#section-projects">Projects <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gradient-color " href="#section-languages">Skills <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1" href="#section-contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1 font-custom" href="./public/docs/CristinaBizoi.pdf" target="_blank"><i class="fas fa-arrow-circle-down gradient-color"></i> CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1 font-custom" href="https://github.com/CristinaBizoi/" target="_blank"><i class="fab fa-github gradient-color"></i> GitHub</a>
                        </li>

                    </ul>
                </div>
            </div>
            </nav>

    </header>
    <section id="section-home">
        <div class="container d-flex align-items-center h-100 ">
            <div class="section-home-inner mx-auto d-flex flex-column">
                <div class="row">
                    <div class="text-section-home text-center text-md-left">
                        <h1 class="pb-4 color-content"> Hello, I'm <span class="color-heading">Cristina Bizoi </span>.</h1>
                        <p class="color-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin urna vel mi euismod, ut pulvinar ligula eleifend. Nulla condimentum augue non libero convallis, eu euismod enim dictum. Praesent maximus faucibus facilisis. Donec non feugiat nisi, id pretium quam. Curabitur massa orci, lobortis eu gravida vitae, aliquam fringilla ex.  </p>
                    </div>
                </div>
                <div class="row">
                    <a href="#section-projects" class="btn btn-more btn-custom rounded-0 mt-3 mx-auto mx-md-0 "> See more <i class="fas fa-arrow-right pl-2"></i> </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-projects">
        <div class="container">
            <h2 class="text-center"> Projects </h2>
            <div class="row">
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container d-flex">
                        <img src="./public/images/quizgame.png" class="img-fluid img-project mx-auto ">
                    </div>
                    <h4 class="text-center mt-3">QuizGame</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2" target="_blank" ><i class="fas fa-eye "></i> Demo</a>
                        <a href="https://github.com/CristinaBizoi/quizgame" target="_blank" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container d-flex">
                        <img src="./public/images/blog.png" class="img-fluid img-project mx-auto">
                    </div>
                    <h4 class="text-center mt-3">Blog</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="http://blog.cristinabizoi.ro" class="btn btn-project mr-2" target="_blank"><i class="fas fa-eye "></i> Demo</a>
                        <a href="https://github.com/CristinaBizoi/blog" target="_blank" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container d-flex">
                        <img src="./public/images/dep.png" class="img-fluid img-project mx-auto">
                    </div>
                    <h4 class="text-center mt-3">Dosarul pacientului</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="http://dep.cristinabizoi.ro" class="btn btn-project mr-2" target="_blank"><i class="fas fa-eye "></i> Demo</a>
                        <a href="https://github.com/CristinaBizoi/dep" target="_blank" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container d-flex">
                        <img src="./public/images/todo.jpg" class="img-fluid img-project mx-auto ">
                    </div>
                    <h4 class="text-center mt-3">Todo</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="http://todo.cristinabizoi.ro" target="_blank" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="https://github.com/CristinaBizoi/todo" target="_blank" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container d-flex">
                        <img src="./public/images/dronezone.png" class="img-fluid img-project mx-auto">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="http://dronezone.cristinabizoi.ro" class="btn btn-project mr-2" target="_blank" ><i class="fas fa-eye "></i> Demo</a>
                        <a href="https://github.com/CristinaBizoi/demo_dronezone" target="_blank" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container d-flex">
                        <img src="./public/images/tanatos.png" class="img-fluid img-project mx-auto ">
                    </div>
                    <h4 class="text-center mt-3">Tanatos</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="http://tanatos.cristinabizoi.ro" class="btn btn-project mr-2" target="_blank"><i class="fas fa-eye "></i> Demo</a>
                        <a href="https://github.com/CristinaBizoi/demo_tanatos" target="_blank" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-languages">
        <div class="container">
            <h2 class="text-center"> Languages used </h2>
            <div class="skills">
                <div class="row ">
                <li class="col-12 align-baseline"> <span class="col-2 text-right"> <i class="fab fa-php big-icon"></i> </span> <span class="bar col-8"><span class="php"></span></span> </li>
                <li class="col-12"> <span class="col-2 text-right"> <i class="fab fa-js big-icon"></i> </span> <span class="bar col-8"><span class="js"></span></span> </li>
                <li class="col-12"> <span class="col-2 text-right"> <i class="fab fa-html5 big-icon"></i> </span> <span class="bar col-8"><span class="html5"></span></span> </li>
                <li class="col-12"> <span class="col-2 text-right"> <i class="fab fa-css3-alt big-icon"></i></span> <span class="bar col-8"><span class="css"></span></span> </li>
                <li class="col-12"> <span class="col-2"> <img src="./public/images/mysql.png" class="image-language float-right"> </span> <span class="bar col-8"><span class="mysql"></span></span> </li>    
            </div >
            </div>

            <h2 class="text-center py-4"> Frameworks </h2>
                <div class="row justify-content-center">
                    <div class="col-3 my-auto">
                        <img class="framework d-block mx-auto" src="./public/images/bootstrap.png">
                    </div>
                    <div class="col-3 my-auto">
                        <img class="framework d-block mx-auto" src="./public/images/jquery.png">
                    </div>
                    <div class="col-3 my-auto">
                        <img class="framework d-block mx-auto" src="./public/images/laravel.png">
                    </div>
                </div>
        </div>
    </section>
    <section id="section-contact">
        <div class="container">
            <div class="section-contact-inner mx-auto">
                <h2 class="text-center pb-5 pt-0 pt-sm-4 color-heading"> Contact me </h2>
                <form method="POST" action="./send_mail.php">
                    <div class="form-row">
                        <div class="col-md-6 col-12 mb-3 pr-sm-0 pr-md-4">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" autocomplete="off" required>
                        </div>
                        <div class="col-md-6 col-12 mb-3 pr-sm-0 pr-md-4">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 pr-sm-0 pr-md-4">
                            <textarea class="form-control " id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-custom btn-send rounded-0 mt-3">Send <i id="right-arrow" class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </section>
    <footer id="section-footer" class="text-center">
        <a href="#section-home" class="btn btn-footer " ><i class="fas fa-angle-double-up"></i></a>
        <div class="container">
            Cristina Bizoi ©2019
        </div>
    </footer>
     <!-- Bootstrap core JavaScript -->
     <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./public/js/toastr.min.js"></script>
    <script>
        
        var sections = $('section'), nav = $('nav'), nav_height = nav.outerHeight();
        
        $(window).on('scroll', function () {
            var cur_pos = $(this).scrollTop();
        
            sections.each(function() {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();
            
                if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active-section');
                nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active-section');
                }
            });
        });
</script>
<script src="./public/js/progress-bar.js"></script>
<script>
    animateProressBar($('.php'));
    animateProressBar($('.js'));
    animateProressBar($('.html5'));
    animateProressBar($('.css'));
    animateProressBar($('.mysql'));
</script>
<?php
    if(isset($_SESSION["message"]) && $_SESSION["message"] == true){
?>
<script>
    $(document).ready( function(){
        toastr.success('Sent!', '');
    });
</script>
<?php
    $_SESSION["message"]= false;
}
?>
</body>
</html>