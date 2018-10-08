<?php
/* ---------- POST VALUES ----------*/
$postProductID = $_POST['prodID'];
$postProductDesc = $_POST['prodDesc'];
$postProductPrice = $_POST['prodPrice'];
$postQty = $_POST['qty'];

//echo($postProductID." ".$postProductDesc." ".$postProductPrice." ".$postQty);die();
//var_dump($order);
session_set_cookie_params(0);
session_start();
if(empty($_SESSION['cartProducts'])){
    $order = array(
        array($postProductID, $postProductDesc, $postProductPrice, $postQty));
    $_SESSION['cartProducts'] = $order;
}else{
    for($row = 0; $row < sizeof($_SESSION['cartProducts']); $row++) {
        for ($col = 0; $col < sizeof($_SESSION['cartProducts'][$row]); $col++) {
            if($_SESSION['cartProducts'][$row][$col] == $postProductID = $_POST['prodID']){
                echo "Repeat";die();
            }
            //echo "\n".$_SESSION['cartProducts'][$row][$col];
        }
    }
    $order = array($postProductID, $postProductDesc, $postProductPrice, $postQty);
    array_push($_SESSION['cartProducts'], $order);
}

//echo (sizeof($_SESSION['cartProducts'][0]));die();

for($row = 0; $row < sizeof($_SESSION['cartProducts']); $row++) {
    for ($col = 0; $col < sizeof($_SESSION['cartProducts'][$row]); $col++) {
        echo "\n".$_SESSION['cartProducts'][$row][$col];
    }
}
die();
/*foreach($_SESSION['cartProducts'] as $key=>$value){
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
}*/
//for($i = 0; $i < sizeof($_SESSION['cartProducts']); $i++){
//    var_dump($_SESSION['cartProducts']);
//}
//echo sizeof($_SESSION['cartProducts']);die();
//$_SESSION['cartProducts'][] = $postProductID."|".$postProductDesc."|".$postProductPrice."|".$postQty;
//echo $_SESSION['cartProducts'][0];die();