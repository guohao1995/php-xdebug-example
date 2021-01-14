<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlowResponse extends Controller
{
    public function index() {
        // We will simulate a slow response with Sleep();
        sleep(10);
        return 'PHP Linux L200';
    }

    public function slowDB() {
        $this->goIntoSlowFunction();
        return 'PHP Linux L200 - DB Query';
    }

    private function goIntoSlowFunction(){
        $count = 0;
        $break = 100;
        while($count < $break)
        {
            DB::table('tasks')->insert(
                ['name' => 'Blarg']
            );
            $count++;
        }
        $tasks = DB::table('tasks')->get();

        foreach($tasks as $task) {
            $name = $task->name;
        }
    }
}
