<div>
<strong>INSTALLATION</strong>
</div>

<p>
<pre>
$ composer require idpass/checkersdk
</pre>
</p>

<p>
Append Identitypass service provider class to the <u><i>providers</i></u> section in config/app.php
<pre>
Idpass\Checkersdk\Providers\CheckersdkProvider::class,
</pre>
</p>

<p>
Publish vendor package
<pre>
php artisan vendor:publish
</pre>
</p>

<p>
Configure your credential from config/IdentitypassKYC.php published.
<pre>
    
    //You can change to your configuration values from here

    // your merchant key
    "merchant_key" => "Your-Merchant-Public-Key",

    //this can be true if you are testing SDK or false to use the live environment
    "is_test" => false, 

    //preferred button color
    "button_color" => "",

    //preferred button text
    "button_text" => "Verify Identity", 

    // DO NOT CHANGE FROM HERE
    "js_link" => "https://js.myidentitypay.com/v1/inline/kyc.js"
</pre>
</p>