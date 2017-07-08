<?php

namespace App\Http\Controllers;

use App\evaluation;
use App\statistics;
use Illuminate\Http\Request;

class evaluationController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * submit questionnaire
     */
    public function questionnaireSubmit(Request $request) {
        $data = new evaluation();
        $data['overall']             = sprintf ("%.2f",($request->q1[0]+$request->q2[0]+$request->q3[0]+$request->q4[0]+$request->q5[0]+$request->q6[0])/6);
        $data['screen']              = sprintf ("%.2f",($request->q7[0]+$request->q8[0]+$request->q9[0]+$request->q10[0])/4);
        $data['terminology']         = sprintf ("%.2f",($request->q11[0]+$request->q12[0]+$request->q13[0]+$request->q14[0]+$request->q15[0]+$request->q16[0])/6);
        $data['learning']            = sprintf ("%.2f",($request->q17[0]+$request->q18[0]+$request->q19[0]+$request->q20[0]+$request->q21[0]+$request->q22[0])/6);
        $data['system_capabilities'] = sprintf ("%.2f",($request->q23[0]+$request->q24[0]+$request->q25[0]+$request->q26[0]+$request->q27[0])/5);
        $data['user_id']             = $request->user()->id;
        $data->save();

        return view('home');
    }

    /**
     * @return $this
     * get average statistics for display
     */
    public function averageStats() {

        $avgData = \DB::table('evaluation')
            ->selectRaw(' count(*) as num, sum(overall)/count(*) as overall, sum(screen)/count(*) as screen, sum(terminology)/count(*) as terminology, sum(learning)/count(*) as learning ,sum(system_capabilities)/count(*) as system_capabilities')
            ->first();
        $avgData->overall             = round($avgData->overall,2);
        $avgData->screen              = round($avgData->screen,2);
        $avgData->terminology         = round($avgData->terminology,2);
        $avgData->learning            = round($avgData->learning,2);
        $avgData->system_capabilities = round($avgData->system_capabilities,2);
        return view('about')->with(['avgData' => $avgData]);
    }

    /**
     * @param Request $request
     * @return int
     * check whether the user has already taken the survey
     */
    public function dupCheck(Request $request){
        if(\App\evaluation::where('user_id','=',$request->user()->id)->first()){
            return 1;
        }else{
            return 0;
        }
    }

}
