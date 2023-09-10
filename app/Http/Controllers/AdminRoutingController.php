<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRoutingController extends Controller
{
    public function AdminLayout(){
        return view('admin.layout');
       }
    
    public function AdminSidebar(){
        return view('admin.sidebar.admin');
    }

    public function UserSidebar(){
        return view('admin.sidebar.user');
    }

    public function CategorySidebar(){
        return view('admin.sidebar.category');
    }

    public function ReservationSidebar(){
        return view('admin.sidebar.reservation');
    }

    public function RestaurantSidebar(){
        return view('admin.sidebar.restaurant');
    }

    public function DashboardSidebar(){
        return view('admin.sidebar.dashboard');
    }

    public function AdminEdit(){
        return view('admin.edit.admin');
    }

    public function UserEdit(){
        return view('admin.edit.user');
    }

    public function CategoryEdit(){
        return view('admin.edit.category');
    }

    public function ReservationEdit(){
        return view('admin.edit.reservation');
    }

    public function RestaurantEdit(){
        return view('admin.edit.restaurant');
    }
}
