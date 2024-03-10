<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Category::factory()->create([
            'name' => 'Python',
        ]);
        
        \App\Models\Category::factory()->create([
            'name' => 'HTML',
        ]);
        
        \App\Models\Category::factory()->create([
            'name' => 'CSS',
        ]);
        
        \App\Models\Category::factory()->create([
            'name' => 'JavaScript',
        ]);
        
        \App\Models\Category::factory()->create([
            'name' => 'PHP',
        ]);
        
        \App\Models\Category::factory()->create([
            'name' => 'Java',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Golang',
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'C++',
        ]);
        
        // \App\Models\Course::factory(20)->create();
        
        // \App\Models\lesson::factory(6)->create();


    }
}
