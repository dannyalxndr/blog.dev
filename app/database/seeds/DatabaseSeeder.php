<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->save();
    }

}

class PostTableSeeder extends Seeder {

	public function run()
	{
		DB::table('posts')->delete();

		for ($i = 1; $i <= 10; $i++)
		{
			$post = new Post();
			$post->title = "Post number $i";
			$post->body = "Body number $i";
			$post->user_id = 1;
			$post->save();
		}		
	}
}
