<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Uniblogcontroller extends Controller
{
    public function add()
    {
        return view('admin.blog.create');
    }
    
     public function create(Request $request)
  {
      
      return redirect('admin/blog/create');
  }
}
