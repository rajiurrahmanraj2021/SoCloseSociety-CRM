<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navigation;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navigation::create([
            'name' => 'Tickets',
            'icon' => '<i class="fa-solid fa-ticket"></i>',
            'route' => 'ticket.index',
        ]);

        Navigation::create([
            'name' => 'User Role',
            'icon' => '<i class="fa-solid fa-person-circle-plus"></i>',
            'route' => 'user_role.index',
        ]);

        Navigation::create([
            'name' => 'Users',
            'icon' => '<i class="fa-solid fa-users"></i>',
            'route' => 'users.index',
        ]);

        Navigation::create([
            'name' => 'Priority',
            'icon' => '<i class="fa-solid fa-ranking-star"></i>',
            'route' => 'priority.index',
        ]);

        Navigation::create([
            'name' => 'Status',
            'icon' => '<i class="fa-solid fa-signal"></i>',
            'route' => 'status.index',
        ]);

        Navigation::create([
            'name' => 'Departments',
            'icon' => '<i class="fa-solid fa-building-user"></i>',
            'route' => 'department.index',
        ]);
    }
}
