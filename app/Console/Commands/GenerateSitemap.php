<?php

namespace App\Console\Commands;

use App\Models\Candidate;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemapGenerator=SitemapGenerator::create('https://missteencameroon.org')->getSitemap();
        $sitemapGenerator->add(Url::create('/')->setPriority(1))
        ->add(Url::create('/list/candidates')->setPriority(0.9))
        ->add(Url::create('/contact')->setPriority(0.6))
        ->add(Url::create('/inscription')->setPriority(0.8));

        Candidate::get()->each(function(Candidate $candidate) use ($sitemapGenerator){
            $sitemapGenerator->add(
                Url::create("/candidate/".$candidate->candidate_slug)
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        });
        $sitemapGenerator->writeToFile(public_path('sitemap.xml'));
        return 'Sitemap generated';
    }
}
