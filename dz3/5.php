<?php


function my_transliteration($stroka){
	$transliter_simbols_array=array(
'a'=>'а',
'b'=>'б',
'в'=>'v',
'г'=>'g',
'д'=>'d',
'е'=>'e',
'ё'=>'yo',
'ж'=>'zh',
'з'=>'z',
'и'=>'i',
'й'=>'j',
'к'=>'k',
'л'=>'l',
'м'=>'m',
'н'=>'n',
'о'=>'o',
'п'=>'p',
'р'=>'r',
'с'=>'s',
'т'=>'t',
'у'=>'u',
'ф'=>'f',
'х'=>'h',
'ц'=>'cz',
'ч'=>'ch',
'ш'=>'sh',
'щ'=>'shh',
'ъ'=>'\'\'',
'ы'=>'y',
'ь'=>'\'',
'э'=>'e\'',
'ю'=>'yu',
'я'=>'ya',
);
//$stroka = preg_split('//u',$stroka,-1,PREG_SPLIT_NO_EMPTY); //вот теперь точно массив
$stroka=mb_split($stroka); 
//$massiv_iz_bukv = str_split($stroka);// теперь это массив
$massiv_iz_bukv=$stroka;
var_dump($massiv_iz_bukv);
var_dump($transliter_simbols_array);
	$new_massiv_iz_bukv = array_replace($transliter_simbols_array, $massiv_iz_bukv);
	echo '<br />';
//	var_dump($new_massiv_iz_bukv);
	
	$new_stroka=implode("", $new_massiv_iz_bukv);
	echo '<br />';
	//var_dump($new_stroka);
}	
	$a='баба';
	my_transliteration($a);
	
/*ну не угадал сначала
'а'=>'a',
'б'=>'b',
'в'=>'v',
'г'=>'g',
'д'=>'d',
'е'=>'e',
'ё'=>'yo',
'ж'=>'zh',
'з'=>'z',
'и'=>'i',
'й'=>'j',
'к'=>'k',
'л'=>'l',
'м'=>'m',
'н'=>'n',
'о'=>'o',
'п'=>'p',
'р'=>'r',
'с'=>'s',
'т'=>'t',
'у'=>'u',
'ф'=>'f',
'х'=>'h',
'ц'=>'cz',
'ч'=>'ch',
'ш'=>'sh',
'щ'=>'shh',
'ъ'=>'\'\'',
'ы'=>'y',
'ь'=>'\'',
'э'=>'e\'',
'ю'=>'yu',
'я'=>'ya', 
*/
	
