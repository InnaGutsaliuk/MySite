<?php
if($_SESSION['client'] <= 0){
    $game_info = 'Вы проиграли!';
    session_unset();
    session_destroy();
}elseif($_SESSION['server'] <= 0){
    $game_info = 'Вы выиграли!';
    session_unset();
    session_unset();
}
