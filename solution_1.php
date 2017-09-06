<!-- Получить содержимое страницы https://geekbrains.ru/. Найти и записать в отдельный файл все ссылки с этой страницы. -->

<?php
$html = file_get_contents( 'https://geekbrains.ru/' );

$dom = new DOMDocument();
@$dom -> loadHTML( $html );

$xpath = new DOMXPath( $dom );
$hrefs = $xpath -> evaluate( '/html/body//a' );
$file = fopen( 'file.txt', 'w+' );

for ( $i = 0; $i < $hrefs -> length; $i++ ) {
	$href = $hrefs -> item( $i );
	$url = $href -> getAttribute( 'href' );
	fwrite( $file, $url );
	fwrite( $file, "\r\n" );
	echo $url . '</br>';
}
fclose( $file );