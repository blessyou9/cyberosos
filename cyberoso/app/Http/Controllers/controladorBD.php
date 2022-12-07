<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Fprincipal()
    {
        return view('principal');
    }

    public function Fformulario()
    {
        return view('formulario');
    }

    public function Ftabla()
    {
        return view('tabla');
    }

    public function Fconsulta()
    {
        return view('consulta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consulta');
    }

    public function index()
    {
        $consultaCyber = DB::table('tb_cyber')->get();
        return view('consulta',compact('consultaCyber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorForm1 $req)
    {
        DB::table('tb_cyber')->insert([
            "titulo"=>$req->input('txtTitulo'),
            "descripcion"=>$req->input('txtDescripcion'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('consulta')->with('mensaje','Tu recuerdo se ha guardado en la bd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaid = DB::table('tb_cyber')->where('id',$id)->first();
        return view('editarConsulta', compact('consultaid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorForm1 $req, $id)
    {
        DB::table('tb_cyber')->where('id', $id)->update([
            "titulo"=> $req->input('txtTitulo'),
            "descripcion"=> $req->input('txtDescripcion'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('consulta')->with('mensaje', 'Los campos se han actualizado');
    }

    public function confirm($id){
        $consultaid = DB::table('tb_cyber')->where('id',$id)->first();
        return view('confirmElim', compact('consultaid'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_cyber')->where('id',$id)->delete();
        return redirect('consulta')->with('mensaje', 'Card borrado');
    }
}
