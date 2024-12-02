<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resume; // Import the Resume model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Create a sample user (if needed)
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create a resume record
        Resume::create([
            'name' => 'James E. Referente',
            'email' => 'referentejames04@gmail.com',
            'phone' => '09612728417',
            'address' => 'Pagala, Baliuag, Bulacan',
            'objective' => 'Seeking for a company where I can leverage my skills and experiences that i earn on my academic journey to contribute effectively towards the company\'s mission while furthering my professional growth and development.',
            'core_skills' => ['Dependability', 'Work Ethics', 'Self-motivation'],
            'experience' => [
                ['title' => 'Pool Attendant', 'company' => '8 Waves Waterpark and Hotel', 'start_date' => 'Feb 2023', 'end_date' => 'June 2023']
            ],
            'education' => [
                ['degree' => 'JHS', 'years' => '2015-2021', 'school' => 'Mariano Ponce National High School'],
                ['degree' => 'SHS Technical-Vocational-Livelihood Track', 'years' => '2019-2021', 'school' => 'Dalubhasaang Politekniko ng Lungsod ng Baliwag'],
                ['degree' => 'Bachelor of Science in Information Technology', 'years' => '2021-Present', 'school' => 'Dalubhasaang Politekniko ng Lungsod ng Baliwag']
            ],
            'personal_information' => [
                'dob' => 'September 4, 2003',
                'place_of_birth' => 'Baliuag, Bulacan',
                'age' => 21,
                'sex' => 'Male',
                'nationality' => 'Filipino',
                'civil_status' => 'Single',
                'height' => '5’4"',
                'weight' => '68 kg'
            ],
            'certifications' => ['I hereby declare that all information given above is correct and to the best of my knowledge. Also, I am aware that in case there is found to be any false statement anywhere, this application may be cancelled.']
        ]);
    }
}
