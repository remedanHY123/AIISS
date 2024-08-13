<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>AIISS</title>
    
    <link rel="icon" href="assets/image/288962599_408601677857494_1395590741157851249_n.jpg" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(255, 255, 255);
        }

        .aulog_r {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: white;
        }

        .aulog_r h4 {
            font-size: 2rem;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .aulog_r p {
            font-size: 1rem;
            font-weight: 300;
            max-width: 600px;
            text-align: justify;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .aulog_l {
            padding: 40px;
            background-color: white;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0);
            border-radius: 10px;
        }

        .sign-in-header {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #28a745;
        }

        .sign-in-header i {
            margin-right: 10px;
            color: #28a745;
            font-size: 1.5rem;
        }

        .form-control {
            border-radius: 50px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            font-size: 1rem;
        }

        .buttton_1 {
    background-color: #28a745;
    color: white;
    padding: 12px 20px;
    font-size: 1.2rem;
    font-weight: bold;
    border-radius: 5px;
    display: inline-block;
    text-align: center;
    text-decoration: none; 
    width: 100%;
    transition: background-color 0.3s, transform 0.3s;
    border: none; 
    outline: none;
}

.buttton_1:hover {
    background-color: #218838;
    color: white;
    transform: scale(1.05);
    text-decoration: none; 
}


        .form-check-label {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .social-network .icoRss, .social-network .icoFacebook, 
        .social-network .icoTwitter, .social-network .icoGoogle, 
        .social-network .icoLinkedin {
            background-color: #28a745;
            color: white;
        }

        .social-network .icoRss:hover, .social-network .icoFacebook:hover, 
        .social-network .icoTwitter:hover, .social-network .icoGoogle:hover, 
        .social-network .icoLinkedin:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .aulog_r {
                height: 50vh;
                padding: 30px;
            }

            .aulog_l {
                margin-top: 40px;
                padding: 20px;
            }

            .sign-in-header {
                font-size: 1.5rem;
            }

            .aulog_r h4 {
                font-size: 1.5rem;
            }

            .aulog_r p {
                font-size: 0.9rem;
            }
        }
        .sign-in-header {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: #28a745; 
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
    position: relative;
}

.sign-in-header i {
    margin-right: 10px;
    color: #28a745; 
    font-size: 1.5rem;
}

.sign-in-header::before, .sign-in-header::after {
    content: '';
    flex: 1;
    border-bottom: 2px solid #28a745;
    margin: 0 15px; 
}

.sign-in-header:hover {
    color: #218838;
}

.sign-in-header i:hover {
    color: #218838;
}

.quote-container {
    position: relative;
    padding: 2rem;
    background-size: cover;
    text-align: center;
    color: #fff;
    border-radius: 10px;
    margin-top: -28rem; 
}


.quote-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1;
    border-radius: 10px;
}

.quote-container h4 {
    position: relative;
    font-size: 2.2rem; 
    font-family: 'Poppins', sans-serif; 
    font-weight: 600; 
    color: rgb(0, 221, 0); 
    text-align: center; 
    margin-bottom: 1rem; 
    letter-spacing: 0.05rem; 
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); 
    z-index: 2;
}
@media (max-width: 768px) {
    .quote-container {
        display: none; 
    }
}
@media (max-width: 850px) {
    .aulog_r {
        margin-top: 50px;
        display: none; 
    }
}

    </style>
</head>
<body>

<section id="aulog">
 <div class="aulog_m">
    <div class="container-fluid">
        <div class="row">
          <div class="col-xl-8 col-lg-7 col-md-6 p-0 order-1 order-md-2">
            <div class="aulog_r" style="
                background-image: url('assets/image/strawberry-field.jpg'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; 
                height: 100vh;">
            <div class="quote-container" >
                <h4>Agricultural Investment Information Support System</h4>
               
            </div>
           
             
           
              </div>
          </div>
      
          <div class="col-xl-4 col-lg-5 col-md-6 p-0 order-2 order-md-1">
            <div class="aulog_l">
                <h2 class="sign-in-header text-center">
                    <i class="fas fa-leaf"></i> Sign In
                </h2>
                
                <div style="position: relative; margin-bottom: 1rem;">
                    <h6 style="margin-bottom: 0.5rem;">Email address</h6>
                    <input class="form-control" placeholder="Enter email" type="text"
                           style="padding-left: 2.5rem; font-size: 1rem; line-height: 1.5;">
                    <i class="fas fa-envelope" style="position: absolute; left: 0.75rem; top: 70%; transform: translateY(-50%); color: #495057;"></i>
                </div>
                
                <div style="position: relative; margin-bottom: 1rem;">
                    <h6 style="margin-bottom: 0.5rem;">Password</h6>
                    <input class="form-control" placeholder="Enter password" type="password"
                           style="padding-left: 2.5rem; font-size: 1rem; line-height: 1.5;">
                    <i class="fas fa-lock" style="position: absolute; left: 0.75rem; top: 70%; transform: translateY(-50%); color: #495057;"></i>
                </div>
                
                
              <span class="font_12 pull-right"><a class="col_3" href="#">Forgot your password?</a></span>
              <div class="form-check mt-3">
                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                <label class="form-check-label" for="checkbox-signin">Remember me</label>
              
             
            </div>
              <h6 class="mt-4"><a class="buttton_1" href="index.php"><i class="fas fa-sign-in-alt"></i> Sign IN   </a></h6>
            
              <div class="aulog_li mt-4 text-center">
                <p class="col_3">Sign in with</p>
                <ul class="social-network social-circle">
                  <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="icoGoogle" title="Google "><i class="fab fa-google"></i></a></li>
                  <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <p>Don't have an account? <a href="register.html">Sign Up</a></p>
                
                <h2 class="sign-in-header text-center" style="margin: 0px ; padding-top: 30px;">
                    <i class="fas fa-leaf"></i> 
                </h2>
                
              </div>
        
            </div>
          </div>
          
        </div>
      </div>
 </div>      
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
