<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participant;

class DatabaseSeeder extends Seeder
{
  /**
    * Seed the application's database.
    *
    * @return void
    */
  public function run()
  {
    Participant::factory()
      ->times(3)
      ->create();
  }
}