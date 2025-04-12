<?
    include("database.php");

    $sql = " SELECT * FROM TB_USUARIO ";


    //$result = $con->query($sql);
    foreach( $con->query($sql) as $value){
    echo $value[0] ."" . $value[1] .""  .$value[2]."" "<br>"}

    //var_dump($result);

?>