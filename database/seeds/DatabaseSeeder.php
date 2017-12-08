<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         // \Bouncer::allow('admin')->toManage(App\Post::class);
	    // \Bouncer::allow('editor')->to('update', App\Post::class);

	    $admin = factory(App\User::class)->create([
	        'email' => 'admin@example.com'
	    ]);

	    // $admin->assign('admin');

	    $editor = factory(App\User::class)->create([
	        'email' => 'editor@example.com'
	    ]);

	    // $editor->assign('editor');

	    factory(App\User::class)->create([
	        'email' => 'user@example.com'
	    ]);
    }
}
