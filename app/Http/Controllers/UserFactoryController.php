<?php

namespace App\Http\Controllers;

use Database\Factories\UserFactory;
use Illuminate\Http\Request;

class UserFactoryController extends Controller
{
    public function index() {
        $newUser = new UserFactory();

        $newUser->definition();
    }
}
