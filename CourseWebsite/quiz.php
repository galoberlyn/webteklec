<?php
if(isset($_POST['submit'])){
    $choice1 = $_POST['choice1'];
    $choice2 = $_POST['choice2'];
    $choice3 = $_POST['choice3'];
    $choice4 = $_POST['choice4'];
    $choice5 = $_POST['choice5'];
    $choice6 = $_POST['choice6'];
    $choice7 = $_POST['choice7'];
    $choice8 = $_POST['choice8'];
    $choice9 = $_POST['choice9'];
    $choice10 = $_POST['choice10'];
    $score = 0;

    if($choice1=='Tim Berners-Lee'){
        $score++;
    }
    if($choice2=='Website'){
        $score++;
    }
    if($choice3=='408'){
        $score++;
    }
    if($choice4=='W3C'){
        $score++;
    }
    if($choice5=='console.log()'){
        $score++;
    }
    if($choice6=='False'){
        $score++;
    }
    if($choice7=='False'){
        $score++;
    }
    if($choice8=='True'){
        $score++;
    }
    if($choice9=='False'){
        $score++;
    }
    if($choice10=='False'){
        $score++;
    }

    if($score == 10){
        echo "<script> function score(){console.log('".$score."') }</script>";
    }else if($score >= 7){
        echo "<script> function score(){console.log('".$score."') }</script>"; 
    }else{
        echo "<script>  function score(){console.log('".$score."') }</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>W E B T E K</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/altstyles.css" rel="stylesheet">
    <!--     <link href='css/agency.css' rel='stylesheet'> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
       <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button> <a class="navbar-brand page-scroll" href="#page-top">Webtek</a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li> <a href="index.html" class="page-scroll">Home</a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header id="header6">
     <div class="container">
            <div class="intro-text">
                <h1 id='header-font'>Excercise Time!</h1>
                <h2 id='header-font2'>Test your Studying Skills</h2>
                <br> <a href=".separator" class="page-scroll btn btn-xl">Start!</a> </div>
        </div>
    </header>
    <div class="separator">
    &nbsp
    </div>
    <!-- internet Section -->
    <section id="#">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Test</h1>
                </div>
                <div>
                   
                   <form method='POST' action='results.php'>
                    <h4>1. Who is the father of html?</h4>
                  
                    <span class='quizForm'><input type="radio" name='choice1' value='Tim-Berners Lee'> Tim-Berners Lee</span>
                    <span class='quizForm'><input type="radio" name='choice1' value='Tim Berners-Lee'> Tim Berners-Lee</span>
                    <span class='quizForm'><input type="radio" name='choice1' value='Tim-Bernard Lee'> Tim-Bernard Lee</span>
                    <span class='quizForm'><input type="radio" name='choice1' value='Tim Bernard-Lee'> Tim Bernard-Lee</span>

                    <h4>2. What is a collection of web resources?</h4>

                    <span class='quizForm'><input type="radio" name='choice2' value='Website'> Website</span>
                    <span class='quizForm'><input type="radio" name='choice2' value='Web Page'> Web Page</span>
                    <span class='quizForm'><input type="radio" name='choice2' value='Software'> Software</span>
                    <span class='quizForm'><input type="radio" name='choice2' value='Program'> Program</span>

                    <h4>3. What is the status code for Request Timeout?</h4>

                    <span class='quizForm'><input type="radio" name='choice3' value='404'> 404</span>
                    <span class='quizForm'><input type="radio" name='choice3' value='408'> 408</span>
                    <span class='quizForm'><input type="radio" name='choice3' value='303'> 303</span>
                    <span class='quizForm'><input type="radio" name='choice3' value='410'> 410</span>

                    <h4>4. Is an international community that develops open standards to ensure the long-term growth of the web.</h4>

                    <span class='quizForm'><input type="radio" name='choice4' value='W3C'> W3C</span>
                    <span class='quizForm'><input type="radio" name='choice4' value='WWW'> WWW</span>
                    <span class='quizForm'><input type="radio" name='choice4' value='XHMTL TEAM'> XHMTL TEAM</span>
                    <span class='quizForm'><input type="radio" name='choice4' value='JAVA SE'> JAVA SE</span>

                    <h4>5. How do you log data on JavaScript? </h4>

                    <span class='quizForm'><input type="radio" name='choice5' value='console.print();'> console.print();</span>
                    <span class='quizForm'><input type="radio" name='choice5' value='System.printf'> System.printf</span>
                    <span class='quizForm'><input type="radio" name='choice5' value='console.log()'> console.log()</span>
                    <span class='quizForm'><input type="radio" name='choice5' value='console.loger()'> console.loger()</span>

                    <h4>6. CSS is a programming language. </h4>

                    <span class='quizForm'><input type="radio" name='choice6' value='True'> True</span>
                    <span class='quizForm'><input type="radio" name='choice6' value='False'> False</span> 

                    <h4>7. JavaScript is also a server side scripting language </h4>

                    <span class='quizForm'><input type="radio" name='choice7' value='True'> True</span>
                    <span class='quizForm'><input type="radio" name='choice7' value='False'> False</span>

                    <h4>8. JavaScript can generate HTML </h4>

                    <span class='quizForm'><input type="radio" name='choice8' value='True'> True</span>
                    <span class='quizForm'><input type="radio" name='choice8' value='False'> False</span>   

                    <h4>9. We can use the br tag on multiple lines to format our html page</h4>

                    <span class='quizForm'><input type="radio" name='choice9' value='True'> True</span>
                    <span class='quizForm'><input type="radio" name='choice9' value='False'> False</span> 

                    <h4>10. What will the code below output?</h4>
                    <span class='quizForm'>console.log(0.1 + 0.2 == 0.3);</span>
                    <span class='quizForm'><input type="radio" name='choice10' value='True'> True</span>
                    <span class='quizForm'><input type="radio" name='choice10' value='False'> False</span> <br>

                   <input class="img-center" name='submit' type='submit'>
                    </form>
             

    <footer>
        <div class="container">
            <div class="row">
                <div class="text-center"> <span class="copyright">Copyright &copy; Web Systems and Technologies 2017</span> </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <div class="container">

  <!-- Trigger the modal with a button -->
</div>
</body>

</html>