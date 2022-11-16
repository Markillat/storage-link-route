<?php

use Illuminate\Support\Facades\Route;
use Markillat\StorageLinkRoute\Http\Controllers\StorageLinkController;

Route::get('storage-link', StorageLinkController::class);