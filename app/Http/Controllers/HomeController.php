<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use DB;
use App\Question;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $question_id = 0;
        $user_id = Auth::user()->id;
        $questions = DB::table('question_user')->where('user_id',$user_id)->get();
        return view('home', ['questions' => $questions, 'question_id' => $question_id]);
//        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('fix_modal_window');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Request $request)
    {
        Fortune::find($request->id)->delete();
        return redirect('/home');
    }
}
