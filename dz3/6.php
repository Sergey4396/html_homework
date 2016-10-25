<?php
function zamena_simvolov($stroka){
$new_stroka=explode(" ", $stroka);
$new2_stroka=implode("_",$new_stroka);
echo $new2_stroka;
}
zamena_simvolov('два слова');