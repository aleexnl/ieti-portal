<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use App\Models\Term;
use App\Models\Career;

class TermCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $curso
     * @return \Illuminate\Http\Response
     */
    public function index($curso)
    {
        $term = Term::findOrFail($curso);
        $careers = $term->careers()->get();

        return view('careers.index', ['term' => $term, 'careers' => $careers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return response()->json(['success' => true, 'last_insert_id' => $career->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $curso
     * @param  int  $cicle
     * @return \Illuminate\Http\Response
     */
    public function show($curso, $cicle)
    {
        $career = Career::findOrFail($cicle);
        if (!$career->trashed()) {
            $term = $career->term;
            return view('careers.show', ['term' => $term, 'career' => $career]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $term, $id)
    {
        $career = Career::findOrFail($id);
        $old_career = $career->name;
        $career->code = $request->code;
        $career->name = $request->name;
        $career->description = $request->description;
        $career->save();

        Log::warning(
            "Updated course " . $old_career . "to " . $career->name,
            ['user_id' => Auth::user()->id, 'user_email' => Auth::user()->email]
        );

        return ['done' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $curso
     * @param  int  $cicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($curso, $cicle)
    {
        $career = Career::findOrFail($cicle);
        $career->delete();

        Log::warning(
            "Soft-deleted career " . $career->name,
            ['user_id' => Auth::user()->id, 'user_email' => Auth::user()->email]
        );

        return ['done' => true];
    }
}
