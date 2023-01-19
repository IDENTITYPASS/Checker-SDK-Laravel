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