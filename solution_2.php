<!-- Создайте с помощью php папку text. В папке с помощью цикла создайте 5 файлов с расширением txt. -->

<?php
if ( !is_dir( 'text/' ) ) {
	$dir = mkdir( 'text/' );
	echo $dir ? 'Директория создана</br>' : 'Не удалось создать директорию</br>';
} 
if ( is_dir( 'text/' ) ) {
	for ( $i=1; $i <= 5; $i++ ) { 
		$name = $i . '-text.txt';
		$file = fopen( 'text/' . $name, 'w+' );
		fclose( $file );
	}
	echo 'Файлы созданы';
}