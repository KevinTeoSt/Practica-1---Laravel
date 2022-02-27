<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['alumnos']=Alumnos::paginate(100);
        return view('alumnos.list', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAlumno = request()->except('_token');

       /* if($request->hasFile('Foto')){
            $datosAlumno['Foto']=$request->file('Foto')->store('uploads','public');
        }*/

        Alumnos::insert($datosAlumno);

        return redirect('alumnos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {/*Lo que hacemos es rellenar el formulario con los datos*/
    $alumnos=Alumnos::findOrFail($id);

    return view('alumnos.edit',compact('alumnos'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAlumnos = request()->except(['_token','_method']);

        #Buscamos la info con el id que le pasamos y luego actualizamos
        Alumnos::where('id','=',$id)->update($datosAlumnos);

        #Enotnces volvemos a buscar la info pero esta vez actualizados
        $alumnos=Alumnos::findOrFail($id);

        return view('alumnos.edit',compact('alumnos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumnos::destroy($id);

        #Retornamos a la pagina
        return redirect('alumnos')->with('mensaje', 'Alumno Eliminado Correctamente');
    }
}
