<?php
$text = 'Привет Мир'; //собственно сам текст
$text = preg_split('//u',$text,-1,PREG_SPLIT_NO_EMPTY);
print_r($text);