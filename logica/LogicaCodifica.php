<?php
    $alfabeto=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $k1=$_POST['k1'];
    $testo_chiaro=strtoupper($_POST['testo']);
    $testoC_senza_spazi=str_replace(" ","",$testo_chiaro);
    $lunghezza=strlen($testoC_senza_spazi);
    $testo_crittografato="";

    print_r($_POST);
    echo $testoC_senza_spazi;
    echo "<br>lunghezza: ".$lunghezza."<br>";
    echo " testo chiaro: ".$testo_chiaro."<br>";

    for($i=0;$i<$lunghezza;$i++){
        //echo "entro nel primo for<br>";
        for($j=0;$j<26;$j++){
            echo"entro nel secondo for<br>";
            if($testo_chiaro[$i]==$alfabeto[$j]){
                echo"entro nell'if<br>";
                //echo $testo_chiaro[$i].",".$alfabeto[$j]."<br>";
                //echo"modulo 26: ".($j+$k1)%26;
                //echo"<br>";
                $testo_crittografato.=$alfabeto[($j+$k1)% 26];
                //echo $testo_crittografato."<br>";
            }
        }
    }
    echo"<br> testo crittografato: ".$testo_crittografato;
    //header('Location:../codifica.php');
?>