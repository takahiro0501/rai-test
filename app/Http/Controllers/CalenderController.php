<?php

namespace App\Http\Controllers;
use App\Models\Rest;
use App\Models\Week;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index(){

        $rests = Rest::all();
        $restList = array();

        foreach($rests as $rest){
            $restList[] = array(
              'id'    => $rest->id,
              'week'  => $rest->week,
            );
        }
        header('Content-type: application/json');
        echo json_encode($restList);
    }
}
