<!-- С помощью функции filesize() получите размер 1-го файла. Итог запишите во 2-ой файл -->

<?php
$fsize = filesize( 'text/1-text.txt' );
if ( file_exists( 'text/content.txt' ) ) {
	$file = fopen( 'text/content.txt','w+' );
} else if ( file_exists( 'text/2-text.txt' ) ) {
	$file = fopen( 'text/2-text.txt','w+' );
} else {
	echo 'Файл не найден';
}
fwrite($file, $fsize);
fclose( $file );