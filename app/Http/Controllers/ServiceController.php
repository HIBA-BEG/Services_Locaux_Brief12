<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('services.index',['services'=>$services]);
    }

    public function create(){
        $categories = Category::all();
        return view('services.create',['categories'=>$categories]);
    }

    public function store(Request $request){
        // dd($request);
        try{

            $data = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'cost' => 'required|numeric',
                'category_id' => 'required',
            ]);


            $data['user_id'] = Auth::id();
            // dd($data);
        

        Service::create($data);

        return redirect(route('service.index'));
    }catch(\Exception $e){
        dd($e->getMessage());
    }
    }
}
