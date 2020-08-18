<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use DB;
use App\Question;
use Auth;

class QuestionController extends Controller
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
        // 作成したQuestionを表示
        $question_id = 0;
        $user_id = Auth::user()->id;
        $questions = DB::table('question_user')->where('user_id',$user_id)->get();
        return view('home', ['questions' => $questions, 'question_id' => $question_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('createQuestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     */
    public function store(Request $request)
    {
        $question = new Question();
        $question->title = $request->title;
        $question->url = ;
        $question->email_availability = $request->emailAvailability;
        $question->q1 = $request->q1;
        $question->q2 = $request->q2;
        $question->q3 = $request->q3;
        $question->q4 = $request->q4;
        $question->q5 = $request->q5;
        $question->layout = $request->layout;
        $question->save();

//        $toMail = DB::table('users')->where('id', $question->peek_user_id)->value('email');


//        Mail::to($toMail)->send( new \App\Mail\Fortune($question->my_name, $question->my_crush_name) );

        return redirect('/home');
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
