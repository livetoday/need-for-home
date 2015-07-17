<?php namespace App\Http\Controllers\Backend;

use Laravel\Lumen\Routing\Controller as BaseController;

class PetsController extends BaseController
{

    public function getList()
    {
        return view('backend.pets.list');
    }

    public function manage()
    {
        return view('backend.pets.manage');
    }

}
