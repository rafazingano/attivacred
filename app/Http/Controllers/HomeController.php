<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $data['page'] = 'about';
        $data['title'] = 'Quem somos';
        return view('internals', $data);
    }

    public function contact()
    {
        $data['page'] = 'contact';
        $data['title'] = 'Contato';
        return view('internals', $data);
    }

    public function lending($type = null)
    {
        $data['page'] = 'lending';
        $data['title'] = 'Emprestimo';
        $data['type'] = $type;
        return view('internals', $data);
    }

    public function send(Request $request){
        dd($request->all());
    }

}
