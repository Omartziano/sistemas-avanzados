<?php
/* ---------- POST VALUES ----------*/
$postRemovedID = $_POST['removedID'];

//echo($postProductID." ".$postProductDesc." ".$postProductPrice." ".$postQty);die();
//var_dump($order);
session_set_cookie_params(0);
session_start();
if(empty($_SESSION['cartProducts'])){
    echo "Error, no cart items found.";
}else{
    unset($_SESSION['cartProducts'][$postRemovedID]);
    $_SESSION['cartProducts'] = array_values( $_SESSION['cartProducts'] );
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