<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    $students = [
        [
            'name' => 'Malik',
            'email' => 'malik@example.com',
            'role' => 'student',
            'about' => "Hello everyone! My name is Malik and I'm a student ..."
        ],
        [
            'name' => 'Tisalita Gabriel Ioan',
            'email' => 'michael+student@example.com',
            'role' => 'student',
            'about' => 'Hello! My name is Michael, and I am a student of Law ...'
        ],
        [
            'name' => 'Marwan Khaled',
            'email' => 'sanna+student@example.com',
            'role' => 'student',
            'about' => 'Sanna is a student of law who loves to read and study ...'
        ],
        [
            'name' => 'Petra Nova',
            'email' => 'petra+student@example.com',
            'role' => 'student',
            'about' => 'Petra is a person who is passionate about climate science ...'
        ],
        [
            'name' => 'Cordelia Taraby',
            'email' => 'cordelia+teacher@example.com',
            'role' => 'student',
            'about' => 'Cordelia is a professor of vision science, with a focus ...'
        ],
        [
            'name' => 'Roberto Frederick',
            'email' => 'roberto+student@example.com',
            'role' => 'student',
            'about' => 'Roberto is a student of economics, with a focus on ...'
        ],
        [
            'name' => 'Roxanne',
            'email' => 'roxanne@example.com',
            'role' => 'teacher',
            'about' => 'Hello! My name is Roxanne, and I am a teacher of English ...'
        ],
        [
            'name' => 'Dawn Jacobs',
            'email' => 'dawn+teacher@example.com',
            'role' => 'teacher',
            'about' => 'Dawn is a professor of economics and marketing ...'
        ],
        [
            'name' => 'Marie Curie',
            'email' => 'marie+teacher@example.com',
            'role' => 'teacher',
            'about' => 'In December 1903 the Royal Swedish Academy of Sciences ...'
        ],
        ];
        return view('students', compact('students'));
    }
}
