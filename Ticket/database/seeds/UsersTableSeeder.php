<?php
use App\Entities\Admin\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        /*
        'first_name'
        'last_name'
        'email'
        'user_name'
        'password'
        'email_verified_date'
        'start_date'
        'end_date'
        */

        $root = new User();
        $root->email = 'root@ticket.com';
        $root->user_name = 'root';
        $root->first_name = 'Root';
        $root->password = 'password';
        $root->created_by = 1;
        $root->updated_by = 1;
        $root->save();

        $user = new User();
        $user->email = 'mazabueljs@gmail.com';
        $user->user_name = 'mazabuel';
        $user->first_name = 'Jaider S.';
        $user->last_name = 'Mazabuel M.';
        $user->password = bcrypt('password');
        $user->created_by = $root->id;
        $user->updated_by = $root->id;
        $user->save();

        factory(User::class, 100)->create([
           'created_by'=>$user->id,
           'updated_by'=>$user->id,
        ]);

    }
}
