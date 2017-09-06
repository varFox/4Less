<!-- 2-ой файл переименуйте в файл content.txt -->

<?php
if ( file_exists( 'text/2-text.txt' ) ) {
	rename ( 'text/2-text.txt', 'text/content.txt' );
	echo 'Файл переименован';
} else if ( file_exists( 'text/content.txt' ) ){
	echo 'Файл уже переименован';
} else {
	echo 'Файл не найден';
}
