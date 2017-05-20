<?php
if(isset($_POST['submit'])){
        if(isset($_POST['choice1'])){
            $choice1 = $_POST['choice1'];
        }else{
            $choice1 = "..";
        }
        if(isset($_POST['choice2'])){
            $choice2 = $_POST['choice2'];
        }else{
            $choice2 = "..";
        }
        if(isset($_POST['choice3'])){
            $choice3 = $_POST['choice3'];
        }else{
            $choice3 = "..";
        }
        if(isset($_POST['choice4'])){
            $choice4 = $_POST['choice4'];
        }else{
            $choice4 = "..";
        }
        if(isset($_POST['choice5'])){
            $choice5 = $_POST['choice5'];
        }else{
            $choice5 = "..";
        }
        if(isset($_POST['choice6'])){
            $choice6 = $_POST['choice6'];
        }else{
            $choice6 = "..";
        }
        if(isset($_POST['choice7'])){
            $choice7 = $_POST['choice7'];
        }else{
            $choice7 = "..";
        }
        if(isset($_POST['choice8'])){
            $choice8 = $_POST['choice8'];
            }else{
                $choice8 = "..";
            }        
        if(isset($_POST['choice9'])){
            $choice9 = $_POST['choice9'];
        }else{
            $choice9 = "..";
        }
        if(isset($_POST['choice10'])){
            $choice10 = $_POST['choice10'];
        }else{
                $choice10 = "..";
        
        }
          if(isset($_POST['choice1'])){
            $choice1 = $_POST['choice1'];
        }else{
            $choice1 = "..";
        }
        if(isset($_POST['choice2'])){
            $choice2 = $_POST['choice2'];
        }else{
            $choice2 = "..";
        }
        if(isset($_POST['choice3'])){
            $choice3 = $_POST['choice3'];
        }else{
            $choice3 = "..";
        }
        if(isset($_POST['choice4'])){
            $choice4 = $_POST['choice4'];
        }else{
            $choice4 = "..";
        }
        if(isset($_POST['choice5'])){
            $choice5 = $_POST['choice5'];
        }else{
            $choice5 = "..";
        }
        if(isset($_POST['choice6'])){
            $choice6 = $_POST['choice6'];
        }else{
            $choice6 = "..";
        }
        if(isset($_POST['choice7'])){
            $choice7 = $_POST['choice7'];
        }else{
            $choice7 = "..";
        }
        if(isset($_POST['choice8'])){
            $choice8 = $_POST['choice8'];
            }else{
                $choice8 = "..";
            }        
        if(isset($_POST['choice9'])){
            $choice9 = $_POST['choice9'];
        }else{
            $choice9 = "..";
        }
        if(isset($_POST['choice10'])){
            $choice10 = $_POST['choice10'];
        }else{
                $choice10 = "..";
        
        }
         if(isset($_POST['choice11'])){
            $choice11 = $_POST['choice11'];
        }else{
                $choice11 = "..";
        
        }   
         if(isset($_POST['choice12'])){
            $choice12 = $_POST['choice12'];
        }else{
                $choice12 = "..";
        
        }   
         if(isset($_POST['choice13'])){
            $choice13 = $_POST['choice13'];
        }else{
                $choice13 = "..";
        
        }   
         if(isset($_POST['choice14'])){
            $choice14 = $_POST['choice14'];
        }else{
                $choice14 = "..";
        
        }   
         if(isset($_POST['choice15'])){
            $choice15 = $_POST['choice15'];
        }else{
                $choice15 = "..";
        
        }   
         if(isset($_POST['choice16'])){
            $choice16 = $_POST['choice16'];
        }else{
                $choice16 = "..";
        
        }   
         if(isset($_POST['choice17'])){
            $choice17 = $_POST['choice17'];
        }else{
                $choice17 = "..";
        
        }   
         if(isset($_POST['choice18'])){
            $choice18 = $_POST['choice18'];
        }else{
                $choice18 = "..";
        
        }   
         if(isset($_POST['choice19'])){
            $choice19 = $_POST['choice19'];
        }else{
                $choice19 = "..";
        
        }   
         if(isset($_POST['choice20'])){
            $choice20 = $_POST['choice20'];
        }else{
                $choice20 = "..";
        
        }           
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
    if($choice11=='Cross Site Request Forgery'){
        $score++;
    }
    if($choice12=='Cross Site Scripting'){
        $score++;
    }
    if($choice13=='HyperText Markup Language'){
        $score++;
    }
    if($choice14=='HyperText Transfer Protocol'){
        $score++;
    }
    if($choice15=='Cascading Style Sheet'){
        $score++;
    }
    if($choice16=='Sassy Cascading Style Sheet'){
        $score++;
    }
    if($choice17=='Java Server Page'){
        $score++;
    }
    if($choice18=='JSP Standard Tag Library'){
        $score++;
    }
    if($choice19=='Request for Comments'){
        $score++;
    }
    if($choice20=='Uniform Resource Locator'){
        $score++;
    }

    if($score == 10){
        echo "<script> alert('".$score."/20 WOW!'); window.location.href = 'index.html'; </script>";
    }else if($score >= 7){
        echo "<script> alert('".$score."/20 Not bad at all, Congrats!'); window.location.href = 'index.html'; </script>";
    }else{
        echo "<script> alert('".$score."/20 you Failed, take a review then try again'); window.location.href = 'index.html'; </script>";
    }
}

?>
