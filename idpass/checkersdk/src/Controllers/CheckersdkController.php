<?php

    namespace Idpass\Checkersdk\Controllers;

    use Idpass\Checkersdk\Idpass;

    class CheckersdkController
    {
        public function __invoke(Idpass $greetMe){
            $greet = $greetMe->greet();
            return view('Checkersdk::index', ['greet'=>$greet]);
        }
    }