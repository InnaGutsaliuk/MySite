<?php
$dir = isset($_GET['link']) ? scandir($_GET['link']) : scandir('.');
$linkdir = isset($_GET['link']) ? @$linkdir.$_GET['link'].'/' : './';

$program='';
foreach($dir as $v){
    if(is_dir($linkdir.$v)){
        $program .= '<a href="/index.php?module=program&link='.$linkdir.$v.'"> <img src="/skins/default/img/dir.jpg" alt="dir" width="15" height="15"> '.$v.'</a><br>';
    }else{
        $program .= '<img src="/skins/default/img/file.jpg" alt="dir" width="15" height="15"> '.$v.'<br>';
    }
}
