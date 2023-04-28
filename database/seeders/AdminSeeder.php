<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('users')->insert([
      [
        'name' => 'admin',
        'email' => 'admin@orchid.com',
        'password' => bcrypt('admin'),
        'isAdmin' => true,
      ],
      [
        'name' => 'Super Admin',
        'email' => 'superadmin@orchid.com',
        'password' => bcrypt('admin'),
        'isAdmin' => true,
      ],
      [
        'name' => 'Niraj Uprety',
        'email' => 'niraj@patient.com',
        'password' => bcrypt('patient'),
        'isAdmin' => false,
      ],
      [
        'name' => 'Krijan Chakradhar',
        'email' => 'krijan@patient.com',
        'password' => bcrypt('patient'),
        'isAdmin' => false,
      ],
      [
        'name' => 'Binaya Khadka',
        'email' => 'binaya@patient.com',
        'password' => bcrypt('patient'),
        'isAdmin' => false,

      ],
      [
        'name' => 'patient',
        'email' => 'patient@patient.com',
        'password' => bcrypt('patient'),
        'isAdmin' => false,
      ],
      [
        'name' => 'patient2',
        'email' => 'patient2@patient.com',
        'password' => bcrypt('patient'),
        'isAdmin' => false,
      ]
    ]);
  }
}
