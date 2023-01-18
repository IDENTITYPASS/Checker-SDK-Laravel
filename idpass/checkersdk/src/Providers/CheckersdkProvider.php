<?php 

namespace Idpass\Checkersdk\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
 
class CheckersdkProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'Checkersdk');
        
        // $this->publishes([
        //     __DIR__ . '/../resources/views' => resource_path('views/vendor/idpass')
        // ], 'identitypass-views');

        $this->publishes([
            __DIR__.'/../config/IdentitypassKYC.php' => config_path('IdentitypassKYC.php'),
        ], 'Identitypass-config');
        
        #create button blade directive for easy reference
        Blade::directive('identitypass_kyc', function () {
            $buttonColor = config('IdentitypassKYC.button_color');
            $buttonText = config('IdentitypassKYC.button_text');
            return "<button style='color:{$buttonColor}' id='identitypass_verify' onclick='VerifyKYC()'/>{$buttonText}</button>";
        });

        Blade::directive('identitypass_script', function ($string) {
            $data = explode("~", $string);
            $name = str_replace(array("'", '"'),'',$data[0]);
            $last = str_replace(array("'", '"'),'',$data[1]);
            $ref = str_replace(array("'", '"'),'',$data[2]);
            $email = str_replace(array("'", '"'),'',$data[3]);
            return "<script src=\"{{ config('IdentitypassKYC.js_link') }}\"></script>
            <script type=\"text/javascript\" language=\"javascript\">
                function VerifyKYC(){
                IdentityKYC.verify({
                        merchant_key: \"{{ config('IdentitypassKYC.merchant_key') }}\",
                        first_name: '{$name}',
                        last_name: '{$last}',
                        user_ref: '{$ref}',
                        is_test: \"{{ config('IdentitypassKYC.is_test') }}\", 
                        email: '{$email}', // your user's email address
                        callback: function (response) {
                        if(response.status =='success'){
                            // process your response data here
                            // please note that the response will also be sent to your webhook URL.
                        }
                        else{
                            // process error message here
                        } 
                        },
                    })
                }
            </script>";
        });
    }

    public function register()
    {
       
    }
}
