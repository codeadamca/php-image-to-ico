<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert a PNG to an ICO File</title>
</head>
<body>
    
    <h1>Convert a PNG to an ICO File</h1>

    <?php

    require __DIR__ . '/vendor/autoload.php';

    $source = dirname( __FILE__ ) . '/brickmmo-logo.png';
    $destination = dirname( __FILE__ ) . '/favicon.ico';

    $ico_lib = new PHP_ICO( $source, array( array( 16, 16 ) ) );
    $ico_lib->save_ico( $destination );

    echo 'File Exists: '.file_exists(dirname( __FILE__ ) . '/brickmmo-logo.png');
    echo '<br>';
    echo 'File Exists: '.file_exists(dirname( __FILE__ ) . '/favicon.ico');

    ?>

    <hr> 

    <img src="brickmmo-logo.png" width="200">
    <img src="favicon.ico" width="200">

</body>
</html>