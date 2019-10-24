<?php
if(isset($_POST['start'])){
    $_SESSION['client'] = 10;
    $_SESSION['server'] = 10;
    unset($_POST['start']);
}

if(isset($_SESSION['client'], $_SESSION['server'])){
    if(isset($_POST['client'])){
        if($_POST['client']>=1 && $_POST['client']<=3){
            $client = $_POST['client'];
            $server = rand(1,3);

            if($client == $server){
                $_SESSION['client'] -= rand(1,4);
            }else{
                $_SESSION['server'] -= rand(1,4);
            }

            if($_SESSION['client'] <= 0 || $_SESSION['server'] <= 0){
                header("Location: /game/gameover");
                exit();
            }
        }else{
            $game_error = '<h2>Введите число от 1 до 3!</h2>';
        }
    }
}

