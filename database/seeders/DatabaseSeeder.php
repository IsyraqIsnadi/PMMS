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
        // Create SuperAdmin
        $this->command->info("adding superadmin");
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'name' => 'super-Admin',
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        // Create petakom committe/cashier
        $this->command->info("adding petakomcommitte");
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'committe@committe.com',
                'password' => \Hash::make('petakom'),
            ]);

        $this->call(UserSeeder::class);
        $this->call(PaymentSeeder::class);

        $this->command->info("adding role permission");
        $this->call(Permissionseeder::class);
    }
}