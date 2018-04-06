<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Facebook Demo</title>

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
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        var appId = "562931960747313";
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId='+appId+'&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    	</script>

                        <fb:login-button scope="public_profile,email,user_birthday,user_location,user_friends" onlogin="getLoginStatus();">
                        </fb:login-button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    		</div>		
    	</div>
    </div>
    

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


            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
           

            console.log(uid + "&" + accessToken);

            function post(path, params, method) {
                method = method || "post"; // Set method to post by default if not specified.

                // The rest of this code assumes you are not using a library.
                // It can be made less wordy if you use one.
                var form = document.createElement("form");
                form.setAttribute("method", method);
                form.setAttribute("action", path);

                for(var key in params) {
                    if(params.hasOwnProperty(key)) {
                        var hiddenField = document.createElement("input");
                        hiddenField.setAttribute("type", "hidden");
                        hiddenField.setAttribute("name", key);
                        hiddenField.setAttribute("value", params[key]);

                        form.appendChild(hiddenField);
                    }
                }

                document.body.appendChild(form);
                console.log(form);
                form.submit();
            }

            

            post("nds.php", {token:accessToken,id:uid});
            window.user_location.href 'nds.php';

          } 
          else if (response.status === 'not_authorized') {
            console.log("No ha iniciado sesión");
          } 
          else {
            console.log("No está registrado en Facebook");
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