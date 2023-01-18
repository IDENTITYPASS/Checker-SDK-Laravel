<?php


//configure Identitypass Checker widget from here


return [

    //You can change to your configuration values from here

    // your merchant key
    "merchant_key" => "YOUR-merchant-key",

    //this can be true if you are testing SDK or false to use the live environment
    "is_test" => false, 

    // your user's  first name
    "first_name" => "",
    
    // your user's  last name
    "last_name" => "", 

    // unique reference id of your user
    "user_ref" => "", 

    // your user's email address
    "email" => "",
    
    //preferred button color
    "button_color" => "#1B92A0",
    
    //preferred button text
    "button_text" => "Verify Identity", 

    // DO NOT CHANGE FROM HERE
    "js_link" => "https://js.myidentitypay.com/v1/inline/kyc.js"
];