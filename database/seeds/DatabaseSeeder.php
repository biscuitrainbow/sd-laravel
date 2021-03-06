<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call('MaterialSeeder');
        $this->call('CustomerSeeder');
        $this->call('DocumentTypeSeeder');
        $this->call('UserSeeder');
        $this->call('ConditionTypeSeeder');
        $this->call('ConditionSeeder');
        $this->call('ConditionMaterialSeeder');
        $this->call('DocumentSeeder');
        $this->call('DocumentHasMaterialSeeder');

        $this->command->info('information seeded!');
    }
}
