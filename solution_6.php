<!-- Добавьте по одной строчке в 3, 4, 5-ый файл. -->

<?php
for ($i = 3; $i <= 5 ; $i++) { 
	$file = fopen( 'text/' . $i . '-text.txt','w+' );
	fwrite($file, 'Строка ' . $i . ' файла');
	fclose($file);
}