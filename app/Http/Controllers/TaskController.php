<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TaskController extends Controller
{
    public function showTaskPopup()
    {
        // Fetch the random blog link from the API
        $apiUrl = 'http://127.0.0.1:8000/api/random-blog-link';
        $response = Http::get($apiUrl);
    
        if ($response->successful()) {
            $task = $response->json('link');
        }
    
        return view('task-popup',  ["task"=>$task]); // Pass the variable to the view using an associative array
    }
    
    
}
