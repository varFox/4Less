<!-- Перепишите 3-ий файл информацией из 4-го и 5-го файла. -->

<?php
$file = fopen('text/3-text.txt', 'a');
$str = "\r\n" . file_get_contents( 'text/4-text.txt' ) . "\r\n" . file_get_contents( 'text/5-text.txt' );
fwrite($file, $str);