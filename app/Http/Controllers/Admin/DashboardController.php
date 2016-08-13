<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\User;

class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
        view()->share('type', '');
    }

	public function index()
	{
        $title = "Dashboard";

		return view('admin.dashboard.index')->with(['title'=>$title]);
	}
}