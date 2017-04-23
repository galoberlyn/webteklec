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
        echo "<script> alert('".$score."/10 WOW!'); window.location.href = 'index.html'; </script>";
    }else if($score >= 7){
        echo "<script> alert('".$score."/10 Not bad at all, Congrats!'); window.location.href = 'index.html'; </script>";
    }else{
        echo "<script> alert('".$score."/10 you Failed, take a review then try again'); window.location.href = 'index.html'; </script>";
    }
}

?>
