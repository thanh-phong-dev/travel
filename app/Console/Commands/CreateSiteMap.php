<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
{
        //create new sitemap object
        $sitemap = App::make("sitemap");

        //add items to the sitemap (url, date, priority, freq)
        $sitemap->add(URL::to('/'), Carbon::now(), '1.0', 'daily');

        //get all posts from db
        $posts = DB::table('tintuc')->orderBy('created_at', 'desc')->get();

        //add every post to the sitemap
        foreach ($posts as $post)
        {
            $sitemap->add(route('post.show', $post->slug), $post->updated_at, 1, 'daily');
        }

        //generate your sitemap (format, filename)
        $sitemap->store('xml', 'sitemap');
}
}
