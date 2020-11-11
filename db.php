<?php  
    //conexion con las base de datos
    session_start();    
    
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'chameza'
    );

    /*
    //mensaje en pantalla para verificar la conexion a la base de datos
    if(isset($conn)){
        echo 'Db is connnected' ;
    }
    */
?>