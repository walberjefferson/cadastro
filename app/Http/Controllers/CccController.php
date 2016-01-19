<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Ccc;
use App\Http\Requests\CccRequest;

class CccController extends Controller
{
    
    public function index()
    {
        $cccs = Ccc::all();
        return view('admin.ccc.index', compact('cccs'));
    }

    public function create()
    {
        return view('admin.ccc.create');
    }

    public function store(CccRequest $request)
    {
        $ccc = $request->all();
        Ccc::create($ccc);
        
        return redirect()->route('ccc.index');
    }

    public function show($id)
    {
        $ccc = Ccc::find($id);
        return view('admin.ccc.edit', compact('ccc'));
    }

    public function edit($id)
    {
        $ccc = Ccc::find($id);
        return view('admin.ccc.edit', compact('ccc'));
    }

    public function update(CccRequest $request, $id)
    {
        $ccc = Ccc::find($id)->update($request->all());
        return redirect()->route('ccc.index');
    }

    public function destroy($id)
    {
        Ccc::find($id)->delete();
        return redirect()->route('ccc.index');
    }
}
