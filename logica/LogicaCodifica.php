<?php
    $alfabeto=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $k1=$_POST['k1'];
    $testo_chiaro=strtoupper($_POST['testo']);
    $lunghezza=count(array_map('trim',$testo_chiaro));
    $testo_crittografato="";
    print_r($_POST);
    echo $lunghezza;
    echo $testo_chiaro;

    for($i=0;$i<$lunghezza;$i++){
        echo "entro nel primo for<br>";
        for($j=0;$j<26;$j++){
            echo"entro nel secondo for<br>";
            if($testo_chiaro[$i]==$alfabeto[$j]){
                echo"entro nell'if";
                echo $testo_chiaro[$i].",".$alfabeto[$j]."<br>";
                $testo_crittografato.=$alfabeto[($j+$k1)% 26];
                echo $testo_crittografato;
            }
        }
    }
    //header('Location:../codifica.php');
?>
