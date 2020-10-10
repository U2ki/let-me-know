<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;
use Auth;

class AnswerController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $url
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($url)
    {
        if ( DB::table( 'question' )->where( 'url', $url )->exists()) {
            $question = DB::table( 'question' )->where('url', $url)->first();
            return view('formAnswer', ['question' => $question]);
        } else return view('error');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        while(true) {
//            $rand = $this->random();
//            if ( !DB::table( 'question' )->where( 'url', $rand )->exists() ) break;
//        }
//
//        $question = new Question();
//        $question->user_id            = Auth::id();
//        $question->title              = $request->title;
//        $question->url                = $rand;
//        $question->email_availability = $request->emailAvailability;
//        $question->q1                 = $request->q1;
//        $question->q2                 = $request->q2;
//        $question->q3                 = $request->q3;
//        $question->q4                 = $request->q4;
//        $question->q5                 = $request->q5;
//        $question->layout             = $request->layout;
//        $question->save();

//        $toMail = DB::table('users')->where('id', $question->peek_user_id)->value('email');
//        Mail::to($toMail)->send( new \App\Mail\sendAnswer($question->my_name, $question->my_crush_name) );

        return redirect('/home');
    }


    /**
     * Display the specified resource.
     *
     * @param $url
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($url)
    {
//        $question = Question::find($url);
//        return view('show', ['questions' => $question]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
//        $question = Question::find($id);
//        return view('edit', ['question' => $question]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
//        $question = Question::find($request->id);
//        $question->title              = $request->title;
//        $question->email_availability = $request->emailAvailability;
//        $question->q1                 = $request->q1;
//        $question->q2                 = $request->q2;
//        $question->q3                 = $request->q3;
//        $question->q4                 = $request->q4;
//        $question->q5                 = $request->q5;
//        $question->layout             = $request->layout;
//        $question->save();
//
//        return redirect('/home');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
//        Question::findOrFail($id)->delete();
//        return redirect('/home');
    }
}
