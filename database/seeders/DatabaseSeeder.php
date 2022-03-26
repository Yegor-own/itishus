<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Video;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Ilya',
            'email'=>'ilya@email.com',
            'password'=>Hash::make('secret'),
            'is_admin'=>true
        ]);
        $course1 = Course::create([
            'img'=>'img/ukno.jpg',
            'content'=>'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        $course2 = Course::create([
            'img'=>'img/ukno1.jpg',
            'content'=>'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        $course3 = Course::create([
            'img'=>'img/ukno2.jpg',
            'content'=>'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        $course4 = Course::create([
            'img'=>'img/ukno3.jpg',
            'content'=>'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course1->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course1->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course1->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course2->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title2',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course2->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title2',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course2->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title2',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course3->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title3',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
        Video::create([
            'course_id' => $course3->id,
            'video_link' => 'U7-6UXrxx64',
            'title' => 'Title3',
            'content' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ]);
    }
}
