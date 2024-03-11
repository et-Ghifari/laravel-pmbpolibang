<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    public function index23()
    {
        $angkatans = Student::paginate()->where('angkatan', '2023');
        return view('apps.student.2023-student', compact('angkatans'));
    }
}
