<?php

$lovename = strtolower(preg_replace("/ /", "", strip_tags(trim($_POST['p1'] . $_POST['p2']))));

$alp     = count_chars($lovename);

for ($i = 97; $i <= 122; $i++){
    if ($alp[$i] != false){
        $anz = strlen($alp[$i]);
        if ($anz < 2){
            $calc[] = $alp[$i];
            }else{
            for ($a = 0; $a < $anz; $a++){
                $calc[] = substr($alp[$i], $a, 1);
                }
            }
        }
    }

while (($anzletter = count($calc)) > 2) {
    $lettermitte = ceil($anzletter / 2);
    for ($i=0; $i < $lettermitte; $i++){
        $sum = array_shift($calc) + array_shift($calc);
        $anz = strlen($sum);
        if ($anz < 2){
            $calcmore[] = $sum;
            }else{
            for ($a=0; $a < $anz; $a++){
                $calcmore[] = substr($sum, $a, 1);
                }
            }
        }

    $anzc = count($calcmore);

    for ($b=0; $b < $anzc; $b++){
        $calc[] = $calcmore[$b];
        }

        array_splice($calcmore, 0);
    }

echo $calc[0] . $calc[1];

?>