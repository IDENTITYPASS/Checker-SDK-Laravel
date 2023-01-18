<?php

    use Illuminate\Support\Facades\Route;

    Route::get('test-identitypass-sdk', [Idpass\Checkersdk\Controllers\CheckersdkController::class, '__invoke']);