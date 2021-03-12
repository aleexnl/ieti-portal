<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use App\Models\Term;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::all();
        return view("terms.index", ['terms' => $terms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("terms.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $term = new Term;
        $term->name = $request->name;
        $term->description = $request->description;
        $term->start_date = $request->start_date;
        $term->end_date = $request->end_date;
        $term->save();

        Log::warning(
            "Created new course: " . $term->name,
            ['user_id' => Auth::user()->id, 'user_email' => Auth::user()->email]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $term = Term::findOrFail($id);
        $careers = $term->careers()->get();

        return view('terms.show', ['term' => $term, 'careers' => $careers]);
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
    public function update(Request $request, $id)
    {
        $term = Term::findOrFail($id);
        $old_term = $term->name;
        $term->name = $request->name;
        $term->description = $request->description;
        //$term->start_date = $request->start_date;
        //$term->end_date = $request->end_date;
        $term->save();
        Log::warning(
            "Updated course " . $old_term . "to " . $term->name,
            ['user_id' => Auth::user()->id, 'user_email' => Auth::user()->email]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $term = Term::findOrFail($id);
        $term->active = 0;
        $term->save();
        Log::warning(
            "Soft-deleted course " . $term->name,
            ['user_id' => Auth::user()->id, 'user_email' => Auth::user()->email]
        );
    }
}
