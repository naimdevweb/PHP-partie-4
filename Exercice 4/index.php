<?php
function nombre($nombre1 = 10 , $nombre2 = 20) {
      if($nombre1 > $nombre2){
        return "Le " . $nombre1 . " est plus grand que " . $nombre2;
    };
    if($nombre1 < $nombre2){
        return "Le " . $nombre1 . " est plus petit que " . $nombre2;
    };
    if($nombre1 == $nombre2){
        return "Le " . $nombre1 . " est egal a " . $nombre2;
    };

}
echo nombre();
?>