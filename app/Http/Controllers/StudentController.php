<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class StudentController extends Controller
{
    /**
     * pour afficher la liste des utilisateurs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $students = Student::orderBy('id')->get();
        return view('students.index', ['students' => $students]);
    }

    /**
     * pour envoyer le formulaire pour la création d’un nouvel utilisateur,.
     *la creation d'un utilisateur avec verification de l'unicite du nom et de l'email et la conformite du mot de passe
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store  pour créer un nouvel utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $data = $request->all();
	    Student::create($data);

	    Session::flash('message', $data['name'] . ' added successfully');
	    return redirect('/students');
    }

    /**
     * Show pour afficher les données d’un utilisateur.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     *pour envoyer le formulaire pour la modification d’un utilisateur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$student = Student::find($id);
        return view('students/edit', ['student' => $student]);
    }

    /**
     * Update pour modifier les données d’un utilisateur
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $data = $request->all();
        $student->update($data);

	    Session::flash('message', $student['name'] . ' updated successfully');
        return redirect('/students');
    }

    /**
     * Remove  pour supprimer un utilisateur..
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
	    $student = Student::find($id);
	    $student->destroy($id);

	    Session::flash('message', $student['name'] . ' deleted successfully');
	    return redirect('/students');
    }
}
