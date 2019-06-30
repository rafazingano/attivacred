<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simulacao;

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

    public function contactSend(Request $request)
    {
        return redirect()->route('contact')->with('status', 'Mensagem enviada');
    }

    public function lending($type = null)
    {
        $data['page'] = 'lending';
        $data['title'] = 'Emprestimo';
        $data['type'] = $type;
        return view('internals', $data);
    }

    public function simulacao(Request $request){
        $data = $request->all();
        $data['page'] = 'resultado';
        $data['title'] = 'Simulação';
        $valor = (float) $data['perfil']['valor'];
        $vezes = 36;
        $taxa = 1.4;
        $total = $valor * $taxa;
        $parcelas = $total / $vezes;
        $data['resultado']['vezes'] = $vezes;
        $data['resultado']['taxa'] = $taxa . '%';
        $data['resultado']['parcelas'] = 'R$' . number_format($parcelas, 2, ',', '.');
        $data['resultado']['total'] = 'R$' . number_format($total, 2, ',', '.');
        $data['simulacao'] = Simulacao::create([
            'options' => $data
        ]);
        //dd($data);
        return view('internals', $data);
        //return redirect()->route('home');
    }

}
