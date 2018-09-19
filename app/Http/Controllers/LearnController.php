<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\LearnModule;
use App\LearnModuleVideo;
use App\ModuleState;
use App\ModuleVideoState;
use App\Quiz;
use Auth;

class LearnController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['landingPage', 'loginBackdoor']]);
    }

    public function index(Request $request) {
        $modules = LearnModule::all();
        return view('learn.index', ['modules' => $modules]);
    }

    public function getQuizModule(Request $request) {
        $input_module = $request->input('module');

        $module = LearnModule::find($input_module);
        $module_video = LearnModuleVideo::where('learn_module_id', $module->id)->get();

        //States where the users is at
        $module_state = ModuleState::where('user_id', Auth::user()->id)->where('learn_module_id', $module->id)->first();
        if ($module_state == NULL) {
            $module_state = new ModuleState;
            $module_state->user_id = Auth::user()->id;
            $module_state->learn_module_id = $module->id;
            $module_state->state = 0;
            $module_state->save();
        }

        foreach ($module_video as $video) {
            $module_video_state = ModuleVideoState::where('user_id', Auth::user()->id)->where('learn_module_video_id', $video->id)->first();
            if ($module_video_state == NULL) {
                $module_video_state = new ModuleVideoState;
                $module_video_state->user_id = Auth::user()->id;
                $module_video_state->learn_module_video_id = $video->id;
                $module_video_state->state = 0;
                $module_video_state->save();
            }
        }

        $quiz = Quiz::where('learn_module_id', $module->id)->first();
        $questions = Question::where('quiz_id', $quiz->id)->get();
        $answers = array();
        foreach ($questions as $question) {
            $answers[$question->id] = Answer::where('question_id', $question->id)->get();
        }

        return view('learn.module', [
            'module' => $module,
            'module_video' => $module_video,
            'questions' => $questions,
            'answers' => $answers,
            'quiz' => $quiz,
        ]);
    }

    public function vetAnswer(Request $request) {

    }

}
