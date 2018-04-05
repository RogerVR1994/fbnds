<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Liverpool Demo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body class="dark-version">
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">Facebook Demo.</a>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="welcome_area clearfix height-800 bg-overlay1by3" style="background-image: url(img/wallpaper.jpg)" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="welcome-text">
                        <h2>Facebook User Trend Analysis</h2>
                        <p>Recomendación de productos para usuario</p>
                        <?php
                            if(!empty($_POST)){
                                $token = $_POST['token'];
                                $id = $_POST['id'];

                                $url = "https://graph.facebook.com/v2.12";

                                $data = file_get_contents("https://graph.facebook.com/v2.12/$id?fields=first_name,last_name,id,friends,gender,age_range,birthday,location&access_token=$token");
                                $json = json_decode($data);

                                $name = $json->first_name;
                                $last_name = $json->last_name;
                                $id = $json->id;
                                $gender = $json->gender;
                                $min_age = $json->age_range->min;
                                $max_age = $json->age_range->max;
                                $birthday = $json->birthday;
                                $location = $json->location->name;
                                $numFriends = $json->friends->summary->total_count;

                                $birthday = explode('/', $birthday);
                                $curr_day = date('j');
                                $curr_month = date('n');
                                $curr_year = date('Y');
                                $age = $curr_year - $birthday[2];

                                if ($curr_day<$birthday[1] && $curr_month<$birthday[0]){
                                    $age = $age - 1;
                                }
                                

                                /*echo '<p>nombre: '.$name.'</p>';
                                echo '<p>apellido: '.$last_name.'</p>';
                                echo '<p>id: '.$id.'</p>';
                                echo '<p>genero: '.$gender.'</p>';
                                echo '<p>min_age: '.$min_age.'</p>';
                                echo '<p>max_age: '.$max_age.'</p>';
                                echo '<p>token: '.$token.'</p>';
                                echo '<p>birthday: '.$birthday[2].'</p>';
                                echo '<p>location: '.$location.'</p>';
                                echo '<p>friends: '.$numFriends.'</p>';
                                echo '<p>age: '.$age.'</p>';*/
                                
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service-area bg-white section_padding_90_50 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Tus Promociones</h2>
                        <p>Estos resultados están basados en tu interacción de Facebook.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.2s">
                        <i class="ti-blackboard"></i>
                        <?php echo '<h5>Por Género: '.$gender.'</h5>' ?>
                        
                        <p>Promoción de 3x2 en zapatos deportivos para hombre</p>
                        <p>20% de descuento en camisas marca 'X'</p>
                    </div>
                </div>
                <!-- Single Service Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.4s">
                        <i class="ti-rocket"></i>
                        <?php echo '<h5>Por Edad: '.$age.'</h5>'; ?>
                        <p>12 meses sin interes en departamento de Electrónica</p>
                    </div>
                </div>
                <!-- Single Service Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.6s">
                        <i class="ti-layout-grid2-alt"></i>
                        <?php 
                            echo '<h5>Por Ubicación: '.$location.'</h5>'; 
                            echo '<p>Visita nuestra sucursal en '.$location.' y obtén un 10% de descuento en tu próxima compra</p>';
                        ?>
                    </div>
                </div>
                <!-- Single Service Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.8s">
                        <i class="ti-folder"></i>
                        <?php echo '<h5>Por Amigos: '.$numFriends.'</h5>'; ?>
                        <p>Recomiéndanos con tus amigos y obtén 10% en tu siguiente compra</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <!-- Footer Text -->
            <div class="copywrite_text text-center">
                <p>Made With <i class="fa fa-heart"></i> by <a href="https://themeforest.net/user/designing-world/portfolio">Designing World</a></p>
            </div>
        </div>
    </section>
    <!-- ***** Footer Area End ***** -->

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '562931960747313',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.12'
        });
          
        FB.AppEvents.logPageView();   

        FB.getLoginStatus(function(response) {        
            ;
          if (response.status === 'connected') {
            
            console.log("Ya inició sesión");

          } 
          else if (response.status === 'not_authorized') {
            console.log("No ha iniciado sesión");
            window.location.replace("index.php");
          } 
          else {
            console.log("No está registrado en Facebook");
            window.location.replace("index.php");
          }
         });
        
      };



      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

      
    </script>

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>