<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Requests\SimpleRequest;
use App\Http\Controllers\Controller;
use App\Models\Simples;


use Carbon\Carbon;

class SimplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //нифига не возвращает? почему?
        // сортирует от последней доб. записи
        //$simples = Simples::order_by('created_at', 'desc')->get();
//        $simples = Simples::latest('published_at')
//                    ->where('published_at', '<', Carbon::now())
//                    ->get();
        $simples = Simples::latest('published_at')
                    ->published()
                    ->get();
        return view('pages.simples',compact('simples'));
    }
    public function simples()
    {
        // сортирует от последней доб. записи
        //$simples = Simples::latest()->get();
//        $simples = Simples::all();
                $simples = Simples::latest('published_at')
                    ->published()
                    ->get();
        return view('pages.simples',compact('simples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SimpleRequest $request)
    {
//        $input = Request::all();
//        Simples::create($input);
        
        // второ способ валидации вход парам. Request $request
        //$this->validate($request, ['title'=>'required]'....)
        
        Simples::create($request->all());
        return redirect('pages.simples');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
//        $simples = Simples::all();
        
        $simples = Simples::findOrFail($id);
        //dd($simples->created_at);
        return view('pages.show',compact('simples'));
       // return view('simples',compact('simples'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $simple = Simples::findOrFail($id);
        
        return view('pages.edit',compact('simple'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SimpleRequest $request, $id)
    {
        $simple = Simples::findOrFail($id);
        $simple->update($request->all());
        return redirect('simples');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
