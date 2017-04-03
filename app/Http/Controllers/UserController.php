<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return view('user.index');
    }

    public function getusers() {
        $users = new Collection;
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            $users->push([
                'id'         => $i + 1,
                'name'       => $faker->name,
                'email'      => $faker->email,
            ]);
        }
        return Datatables::of($users)->make(true);
    }
}
