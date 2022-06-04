<?php
$pass="thapa";

// $option=['cost'=> 12, 'salt'=>'robinislamisaagoodpersonskdjfklsjdfasjfsajdf'];//use default . do not use option.

$str_pass=password_hash($pass,PASSWORD_BCRYPT,);//this is blow fisht alge 

echo $str_pass;

$pass_cheak=password_verify($pass,$str_pass);//if the pass increapted from match with str_pass.when $pass_cheak will be true.

if($pass_cheak){
    echo "</br> login successful";

}else{
    echo "login incorrect";
}

?>