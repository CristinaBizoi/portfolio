<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./public/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <title>Portofolio</title>
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
                            <a class="nav-link gradient-color " href="#section-projects">Projects <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1" href="#section-home">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1" href="#section-contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1" href="#"><i class="fas fa-arrow-circle-down gradient-color"></i> CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  gradient-color pb-1" href="#"><i class="fab fa-github gradient-color"></i> GitHub</a>
                        </li>

                    </ul>
                </div>
            </div>
            </nav>

    </header>
    <section id="section-home">
        <div id="sketch-holder"> </div>
        <div class="container d-flex align-items-center h-100 ">
            <div class="section-home-inner col-12 col-md-8 mx-auto d-flex flex-column">
                <div class="row">
                    <div class="text-section-home text-center text-md-left">
                        <h1 class="color-heading pb-4"> Hello Wold! </h1>
                        <p class="color-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin urna vel mi euismod, ut pulvinar ligula eleifend. Nulla condimentum augue non libero convallis, eu euismod enim dictum. Praesent maximus faucibus facilisis. Donec non feugiat nisi, id pretium quam. Curabitur massa orci, lobortis eu gravida vitae, aliquam fringilla ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac massa a purus ullamcorper ullamcorper. Etiam condimentum congue justo ornare interdum. Phasellus id lorem lacus. Sed laoreet, sapien suscipit accumsan dapibus, metus felis tristique neque, a lacinia ex libero nec ipsum. Fusce posuere, erat quis volutpat feugiat, sapien ipsum luctus est, quis ornare mauris enim in sem. Aenean varius sodales ex, id finibus dui vehicula at. Vivamus nisl eros, ultrices ut ullamcorper nec, gravida vitae arcu.  </p>
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
                    <div class="img-container">
                        <img src="./public/images/default.jpg" class="img-fluid img-project ">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container">
                        <img src="./public/images/default.jpg" class="img-fluid img-project ">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container">
                        <img src="./public/images/default.jpg" class="img-fluid img-project ">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container">
                        <img src="./public/images/default.jpg" class="img-fluid img-project ">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container">
                        <img src="./public/images/default.jpg" class="img-fluid img-project ">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6 py-4 ">
                    <div class="img-container">
                        <img src="./public/images/default.jpg" class="img-fluid img-project ">
                    </div>
                    <h4 class="text-center mt-3">Dronezone</h4>
                    <div class="row justify-content-center py-2">
                        <span class="rounded-pill btn-tag btn-laravel">laravel</span>
                        <span class="rounded-pill btn-tag btn-bootstrap">bootstrap</span>
                        <span class="rounded-pill btn-tag btn-jquery">jquery</span>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec accumsan mauris. Etiam diam nibh, facilisis eget urna sit amet, gravida tristique erat.</p>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-project mr-2"><i class="fas fa-eye "></i> Demo</a>
                        <a href="" class="btn btn-project"><i class="fab fa-github"></i> Source</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-languages" class="py-5">
        <div class="container">
            <h2 class="text-center"> Languages used </h2>
            <div class="skills">
                <div class="row ">
                <li class="col-12 align-baseline"> <span class="col-2 text-right"> <i class="fab fa-php big-icon"></i> </span> <span class="bar col-8"><span class="php"></span></span> </li>
                <li class="col-12"> <span class="col-2 text-right"> <i class="fab fa-js big-icon"></i> </span> <span class="bar col-8"><span class="js"></span></span> </li>
                <li class="col-12"> <span class="col-2 text-right"> <i class="fab fa-html5 big-icon"></i> </span> <span class="bar col-8"><span class="html5"></span></span> </li>
                <li class="col-12"> <span class="col-2 text-right"> <i class="fab fa-css3-alt big-icon"></i></span> <span class="bar col-8"><span class="css"></span></span> </li>
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
                <form>
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
    <footer id="section-footer">
        <div class="container">
        </div>
    </footer>
     <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./public/js/sketch.js"></script>
    <script>
        // function setup(){
        //     var canvas = createCanvas(100, 100);
        //     canvas.parent('sketch-holder');
        //     background(255, 0, 255);
        // }
    </script>
        <script>
        
        // ----------------------------------------
        // Particle
        // ----------------------------------------

        function Particle( x, y, radius ) {
            this.init( x, y, radius );
        }

        Particle.prototype = {

            init: function( x, y, radius ) {

                this.alive = true;

                this.radius = radius || 10;
                this.wander = 0.15;
                this.theta = random( TWO_PI );
                this.drag = 0.92;
                this.color = '#fff';

                this.x = x || 0.0;
                this.y = y || 0.0;

                this.vx = 0.0;
                this.vy = 0.0;
            },

            move: function() {

                this.x += this.vx;
                this.y += this.vy;

                this.vx *= this.drag;
                this.vy *= this.drag;

                this.theta += random( -0.5, 0.5 ) * this.wander;
                this.vx += sin( this.theta ) * 0.1;
                this.vy += cos( this.theta ) * 0.1;

                this.radius *= 0.96;
                this.alive = this.radius > 0.5;
            },

            draw: function( ctx ) {

                ctx.beginPath();
                ctx.arc( this.x, this.y, this.radius, 0, TWO_PI );
                ctx.fillStyle = this.color;
                ctx.fill();
            }
        };

        // ----------------------------------------
        // Example
        // ----------------------------------------

        var MAX_PARTICLES = 280;
        var COLOURS = [ '#69D2E7', '#A7DBD8', '#E0E4CC', '#F38630', '#FA6900', '#FF4E50', '#F9D423' ];

        var particles = [];
        var pool = [];

        var demo = Sketch.create({
            container: document.getElementById( 'sketch-holder' ),
            retina: 'auto'
        });

        demo.setup = function() {

            // Set off some initial particles.
            var i, x, y;

            for ( i = 0; i < 20; i++ ) {
                x = ( demo.width * 0.5 ) + random( -100, 100 );
                y = ( demo.height * 0.5 ) + random( -100, 100 );
                demo.spawn( x, y );
            }
        };

        demo.spawn = function( x, y ) {
            
            var particle, theta, force;

            if ( particles.length >= MAX_PARTICLES )
                pool.push( particles.shift() );

            particle = pool.length ? pool.pop() : new Particle();
            particle.init( x, y, random( 5, 40 ) );

            particle.wander = random( 0.5, 2.0 );
            particle.color = random( COLOURS );
            particle.drag = random( 0.9, 0.99 );

            theta = random( TWO_PI );
            force = random( 2, 8 );

            particle.vx = sin( theta ) * force;
            particle.vy = cos( theta ) * force;

            particles.push( particle );
        };

        demo.update = function() {

            var i, particle;

            for ( i = particles.length - 1; i >= 0; i-- ) {

                particle = particles[i];

                if ( particle.alive ) particle.move();
                else pool.push( particles.splice( i, 1 )[0] );
            }
        };

        demo.draw = function() {

            demo.globalCompositeOperation  = 'lighter';

            for ( var i = particles.length - 1; i >= 0; i-- ) {
                particles[i].draw( demo );
            }
        };

        demo.mousemove = function() {

            var particle, theta, force, touch, max, i, j, n;

            for ( i = 0, n = demo.touches.length; i < n; i++ ) {

                touch = demo.touches[i], max = random( 1, 4 );
                for ( j = 0; j < max; j++ ) {
                  demo.spawn( touch.x, touch.y );
                }

            }
        };
        
        </script>
</body>
</html>