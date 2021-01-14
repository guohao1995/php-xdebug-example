<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlowResponse extends Controller
{
    public function index() {
        // We will simulate a slow response with Sleep();
        sleep(15);
        return 'Slow response';
    }

    public function slowDB() {
        $this->goIntoSlowFunction();
        return 'Another slow response';
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
