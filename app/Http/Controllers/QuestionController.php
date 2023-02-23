<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return Inertia::render('Questions/ListQuestions', [
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Questions/CreateQuestions');
    }

    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required',
            'question' => 'required',
        ]);
        Question::create([
            'answer' => $request->answer,
            'question' => $request->question,
            'raiting' => 0,
        ]);
        sleep(1);

        return redirect()
            ->route('question.index')
            ->with('message', 'Вопрос создан');
    }

    public function show()
    {
        $questions = Question::inRandomOrder()->first();
        return Inertia::render('Question', [
            'question' => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return Inertia::render('Questions/Edit', [
            'question' => $question,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'answer' => 'required',
            'question' => 'required',
        ]);

        $question->answer = $request->answer;
        $question->question = $request->question;

        $question->save();
        sleep(1);

        return redirect()
            ->route('question.index')
            ->with('message', 'Вопрос обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        sleep(1);

        return redirect()
            ->route('question.index')
            ->with('message', 'Вопрос удален');
    }
}
