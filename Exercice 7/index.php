<?php
function nombre($age = 24 , $genre = "homme") {
      if($genre){
        echo  "vous ete un homme ";
    } else{
       echo "vous ete une femme ";
    }

    if($age < 18){
        echo "vous ete mineur";
    }else{
  echo "vous ete majeur";
    }
   

}
 nombre();
?>