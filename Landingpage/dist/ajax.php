<?php
$save = str_replace('data:image/png;base64,', '', $_POST['image'] );
file_put_contents( 'img/graff/graff-'.printf("uniqid(): %s\r\n", uniqid());.'.png', base64_decode( $save ) );
?>