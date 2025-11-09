<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category as CategoryModel;
use App\Models\Course as CourseModel;
use App\Models\Writer as WriterModel;

use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $dataScience = CategoryModel::create(['name' => 'Data Science']);
        $networkSecurity = CategoryModel::create(['name' => 'Network Security']);

        $writers = [
            WriterModel::create([
                'name' => 'Raka Putra Wicaksono',
                'specialist' => 'Specialist in Data Science',
                'image' => 'img/profile1.jpg'
            ]),
            WriterModel::create([
                'name' => 'Bia Mecca Annisa',
                'specialist' => 'Specialist in Data Science',
                'image' => 'img/profil2.jpg'
            ]),
            WriterModel::create([
                'name' => 'Abi Firmansyah',
                'specialist' => 'Specialist in Network Security',
                'image' => 'img/profile3.jpg'
            ])
        ];

        CourseModel::create([
            'category_id' => $dataScience->id,
            'writer_id' => $writers[0]->id,
            'name' => 'Machine Learning',
            'description' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...',
            'content' => 'Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperintah.
            
            Dalam hal ini machine learning memiliki kemampuan untuk memperoleh data yang ada dengan perintah ia sendiri. ML juga dapat mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.',
            'image' => 'img/ML.png',
            'published_at' => $faker->dateTimeBetween('-15 years', 'now')
        ]);

        CourseModel::create([
            'category_id' => $dataScience->id,
            'writer_id' => $writers[1]->id,
            'name' => 'Deep Learning',
            'description' => 'Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...',
            'content' => $faker->paragraph(4, true),
            'image' => 'img/DL.jpg',
            'published_at' => $faker->dateTimeBetween('-15 years', 'now')
        ]);

        CourseModel::create([
            'category_id' => $dataScience->id,
            'writer_id' => $writers[1]->id,
            'name' => 'Deep Learning',
            'description' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...',
            'content' => $faker->paragraph(4, true),
            'image' => 'img/NLP.jpg',
            'published_at' => $faker->dateTimeBetween('-15 years', 'now')
        ]);

        CourseModel::create([
            'category_id' => $networkSecurity->id,
            'writer_id' => $writers[2]->id,
            'name' => 'Software Security',
            'description' => $faker->sentence(11),
            'content' => $faker->paragraph(4, true),
            'image' => 'img/SS.jpg',
            'published_at' => $faker->dateTimeBetween('-15 years', 'now')
        ]);

        CourseModel::create([
            'category_id' => $networkSecurity->id,
            'writer_id' => $writers[2]->id,
            'name' => 'Network Administration',
            'description' => $faker->sentence(11),
            'content' => $faker->paragraph(4, true),
            'image' => 'img/NA.jpg',
            'published_at' => $faker->dateTimeBetween('-15 years', 'now')
        ]);

        CourseModel::create([
            'category_id' => $networkSecurity->id,
            'writer_id' => $writers[2]->id,
            'name' => 'Popular Network Technology',
            'description' => $faker->sentence(11),
            'content' => $faker->paragraph(4, true),
            'image' => 'img/PNT.jpeg',
            'published_at' => $faker->dateTimeBetween('-15 years', 'now')
        ]);
    }
}