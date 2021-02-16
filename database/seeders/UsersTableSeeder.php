<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\MemberInvitation;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();

        $this->call('DatabaseSeeder');
    }
}
