<?php
/**
 * Created by PhpStorm.
 * User: ganes
 * Date: 05/08/2018
 * Time: 16:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
      }

    public function test()
    {
        return view('admin.dashboard.test');
    }
}