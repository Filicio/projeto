<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ministros extends Controller

    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $ministros = ministros::all();
            return view('ministros.index', compact('ministros'));
        }
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('ministros.cadastro');
        }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $ator = new Ator();
            $ator->nome = $request->nome;
            $ator->ano = $request->ano;
            $ator->save();
            return redirect('/atores');
        }
        /**
         * Display the specified resource.
         *
         * @param  \App\Ator  $ator
         * @return \Illuminate\Http\Response
         */
        public function show(Ator $ator)
        {
            //
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Ator  $ator
         * @return \Illuminate\Http\Response
         */
        public function edit(Ator $atore)
        {
            //busca no banco o ator
            
            return view('atores.edit', compact('atore'));
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Ator  $ator
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Ator $atore)
        {
            $atore->nome = $request->nome;
            $atore->ano = $request->ano;
            $atore->save();
            return redirect('/atores');
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Ator  $ator
         * @return \Illuminate\Http\Response
         */
        public function destroy(Ator $atore)
        {
            $atore->delete();
            return redirect('/atores');
            
        }
    }
