<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;
use Auth;
use Illuminate\Support\Facades\Mail;

class AnswerController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index($url)
    {
        $question = Question::where('url',$url)->first();
        if (isset($question->id) && $question->deleted_at == NULL) {
            $answers = Answer::where('question_id', $question->id)->get();
            return view( 'show', [ 'question' => $question, 'answers' => $answers ] );
        } else return view('result', ['result' => 'error']);
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
        $question = DB::table( 'question' )->where('url', $url)->first();
        if (isset($question->id) && $question->deleted_at == NULL) {
            return view('formAnswer', ['question' => $question]);
        } else return view('result', ['result' => 'error']);
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
        $answer = new Answer();
        $answer->question_id        = $request->question_id;
        $answer->a1                 = $request->a1;
        $answer->a2                 = $request->a2;
        $answer->a3                 = $request->a3;
        $answer->a4                 = $request->a4;
        $answer->a5                 = $request->a5;
        $answer->save();

        $question = DB::table( 'question' )->where('id', $answer->question_id)->first();
        if($question->email_availability === 1) {
            $toMail = DB::table('users')->where('id', $question->user_id)->value('email');
            Mail::to($toMail)->send( new \App\Mail\sendAnswer(
                $question->title,
                $question->q1,
                $question->q2,
                $question->q3,
                $question->q4,
                $question->q5,
                $answer->a1,
                $answer->a2,
                $answer->a3,
                $answer->a4,
                $answer->a5 ) );
        }
        return view('result', ['result' => 'normally']);
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
        //
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
        //
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($url, $id)
    {
        Answer::findOrFail($id)->delete();
        $question = Question::where('url',$url)->first();
        $answers = Answer::where('question_id', $question->id)->get();
        return view('show', ['question' => $question, 'answers' => $answers]);
    }
}
