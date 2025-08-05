<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobModel 
{
    //
    public static function all ()
    {
        $jobs = [
             [
                "title" => "Software Engineer",
                "company" => "Tech Company",
                "location" => "Remote",
                "description" => "Develop and maintain web applications."
            ],
            [
                "title" => "Product Manager",
                "company" => "Business Inc.",
                "location" => "New York, NY",
                "description" => "Lead product development and strategy."
            ],
             [
                "title" => "UX Designer",
                "company" => "Creative Agency",
                "location" => "San Francisco, CA",
                "description" => "Design user-friendly interfaces."
            ]
        ];

        // This method should return all job listings
        return $jobs;
    }
}
