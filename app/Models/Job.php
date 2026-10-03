<?php

namespace App\Models;

class Job 
{
    public static function all(){
    
        return [
            [
                "id" => 1,
                "title" => "Laravel Senior Developer",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.",
                "location" => "Cairo, Egypt",
                "salary" => 10000,
            ],
            [
                "id" => 2,
                "title" => "React Senior Developer",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.",
                "location" => "Cairo, Egypt",
                "salary" => 12000,
            ],
            [
                "id" => 3,
                "title" => "Vue Senior Developer",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.",
                "location" => "Cairo, Egypt",
                "salary" => 15000,
            ],
        ];
    }
}