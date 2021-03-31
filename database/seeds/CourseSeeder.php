<?php

use Illuminate\Database\Seeder;

use App\Course;

use App\Chapter;

use App\Category;

use Faker\Generator as Faker;



class CourseSeeder extends Seeder


{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 3; $i++){
            $course = new Course();
            $course->name = $faker->text(rand(20, 128));
            $course->hours = rand(5, 100);
            $course->cost = rand(20, 150);
            $course->save();

            for($y = 0; $y < 3; $y++){
                $chapter = new Chapter();
                $chapter->chapter_duration = rand(10, 100);
                $chapter->description = $faker->text(1000);
                $chapter->title = $faker->name();
                $course->chapters()->save($chapter);
            }

        }

        for($c = 0; $c < 3; $c++){
            $category = new Category();
            $category->title = $faker->name();
            $course->categories()->save($category);
        }



    }
}
