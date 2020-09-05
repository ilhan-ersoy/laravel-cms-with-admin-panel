<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkimizda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count = 0;
       foreach($pages as $page){  
       $count++;     
       DB::table('pages')->insert([
			'title'=>$page,
			'slug'=>str_slug($page),
			'content'=>'Perferendis sed error veniam et quae et voluptas quaerat. Maxime voluptatem
				Omnis rerum sapiente pariatur excepturi dolor quo distinctio. Vel officiis addeseruntut. 
				Hic vitae sed mollitia maxime saepe. Iure delectus incidunt vel et est id perspiciatis.',
			'image'=>'https://assets.entrepreneur.com/content/3x2/2000/20160602195129-businessman-writing-planning-working-strategy-office-focus-formal-workplace-message.jpeg',
			'order'=>$count,
			'created_at'=>now(),
			'updated_at'=>now()	
       ]); 
   }
    }
}
