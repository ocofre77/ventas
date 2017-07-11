<?php

namespace App\Http\Controllers;

use App\DataTables\ReportsDataTable;
use App\Http\Requests;

class UsersController extends Controller
{
    //
    public function index(ReportsDataTable $dataTable)
    {
        return $dataTable->render('Users.index');
    }

}
