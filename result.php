<?php

/**
 * protect from crossite scripting 
 * html senitize input
 * htmlspecialchars
 */
// $name = htmlspecialchars($_POST['name']);
// $email = htmlspecialchars($_POST['mail']);
// $amount =htmlspecialchars($_POST['number']);
// $cardType =htmlspecialchars($_POST['cardType']);
// $cardNumber =htmlspecialchars($_POST['cardNumber']);

/**
 * another way to senitize input 
 * built in function of php
 * filter_input(INPUT_TYPEOFREQUEST,'variable/name',typeofsanitize)
 */

$name       = filter_input( INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$email      = filter_input( INPUT_POST,'mail',FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$amount     = filter_input( INPUT_POST,'number',FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$cardType   = filter_input( INPUT_POST,'cardType',FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$cardNumber = filter_input( INPUT_POST,'cardNumber',FILTER_SANITIZE_FULL_SPECIAL_CHARS );

function hide_number( $card_number )
{
     
     $fast_number = substr($card_number,0,3);
     $last_number = substr($card_number,-2,2);
     return $fast_number.' ******** '.$last_number ;
}

echo (" Name : {$name} "." <br> " ),
     (" E-mail: $email "." <br> " ),
     (" Amount: $amount BDT "."<br>"),
     (" Your Card-Type: $cardType "." <br> " ),
     (" Your Card-Number: ").hide_number($cardNumber)." <br> ",
     (" Payment Successfull! "." Thank You For Shopping..... ");

