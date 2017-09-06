<!-- Удалите 4 и 5-ый файл. -->

<?php
if ( file_exists( 'text/4-text.txt' ) || file_exists( 'text/5-text.txt' ) ) {
	unlink( 'text/4-text.txt' );
	unlink( 'text/5-text.txt' );
	echo 'Файлы удалены';
} else {
	echo 'Файлы не найдены';
}
