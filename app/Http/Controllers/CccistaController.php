<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Cccista;
use App\Repositories\CccistaRepositoryEloquent;
use App\Repositories\CccRepositoryEloquent;

class CccistaController extends Controller
{
    
    private $cccRepository;
    private $cccistaRepository;
    private $cccista;
    
    public function __construct(CccRepositoryEloquent $cccRepository, CccistaRepositoryEloquent $cccistaRepository, Cccista $cccista){
        $this->cccRepository = $cccRepository;
        $this->cccistaRepository = $cccistaRepository;
        $this->cccista = $cccista;
    }

    public function index()
    {
        $meses = [1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'];
        
        $cccistas = $this->cccistaRepository->paginate(10);   
        return view('admin.cccista.index', compact('cccistas', 'meses'));
    }

    public function create()
    {
        $ccc = $this->cccRepository->lists();
        return view('admin.cccista.create', compact('ccc'));
    }

    public function store(Request $request)
    {
        $this->cccistaRepository->create($request->all());
        return redirect()->route('cccista.index');
    }

    public function show($id)
    {
        $cccista = $this->cccistaRepository->find($id);
        return view('admin.cccista.edit', compact('cccista'));
    }

    public function edit($id)
    {
        $cccista = $this->cccistaRepository->find($id);
        $ccc = $this->cccRepository->lists();
        return view('admin.cccista.edit', compact(['cccista', 'ccc']));
    }

    public function update(Request $request, $id)
    {
        $this->cccistaRepository->update($request->all(), $id);
        return redirect()->route('cccista.index');
    }

    public function destroy($id)
    {
        $this->cccistaRepository->delete($id);
        return redirect()->route('cccista.index');
    }
    
    public function aniversariantes(){
        $meses = [1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'];
        
        $mes = $_GET['mes'];
        $cccistas = $this->cccista->niverMes($mes);
        return view('admin.cccista.index', compact('cccistas', 'meses'));
    }
}
