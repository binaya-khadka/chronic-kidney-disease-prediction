<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $patients = [
      [
        'name' => 'Niraj Uprety',
        'age' => 22,
        'email' => 'niraj@patient.com',
        'password' => bcrypt('patient'),
        'phone' => 9877654456,
      ],
      [
        'name' => 'Krijan Chakradhar',
        'age' => 22,
        'email' => 'krijan@patient.com',
        'password' => bcrypt('patient'),
        'phone' => 9898765456,
      ],
      [
        'name' => 'Binaya Khadka',
        'age' => 22,
        'email' => 'binaya@patient.com',
        'password' => bcrypt('patient'),
        'phone' => 12331224,
      ],
      [
        'name' => 'patient',
        'age' => 25,
        'email' => 'niraj@patient.com',
        'password' => bcrypt('patient'),
        'phone' => 234223425,
      ],
    ];

    foreach ($patients as $patient) {
      Patient::create($patient);
    }
  }
}
