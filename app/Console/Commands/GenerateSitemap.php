<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate multiple XML sitemaps (pages, blogs, products) with index file';

    public function handle()
    {
        $baseUrl = config('app.url'); // ✅ always correct domain

        // ✅ Static pages sitemap
        $pagesSitemap = Sitemap::create()
            ->add(Url::create("{$baseUrl}/")->setPriority(1.0))
            ->add(Url::create("{$baseUrl}/wash-and-fold-abu-dhabi")->setPriority(0.9))
            ->add(Url::create("{$baseUrl}/ironing-abu-dhabi")->setPriority(0.9))
            ->add(Url::create("{$baseUrl}/washing-and-pressing-abu-dhabi")->setPriority(0.9))
            ->add(Url::create("{$baseUrl}/curtain-cleaning")->setPriority(0.8))
            ->add(Url::create("{$baseUrl}/carpet-mattress-sofa-cleaning")->setPriority(0.8))
            ->add(Url::create("{$baseUrl}/dry-cleaning-near-me")->setPriority(0.9))
            ->add(Url::create("{$baseUrl}/blog")->setPriority(0.8))
            ->add(Url::create("{$baseUrl}/laundry-price-list-abu-dhabi"))
            ->add(Url::create("{$baseUrl}/laundry-price-list-dubai"))
            ->add(Url::create("{$baseUrl}/laundry-price-list-ajman"))
            ->add(Url::create("{$baseUrl}/dubai"))
            ->add(Url::create("{$baseUrl}/ajman-sharjah"))
            ->add(Url::create("{$baseUrl}/book-laundry-online"))
            ->add(Url::create("{$baseUrl}/return-policy"))
            ->add(Url::create("{$baseUrl}/laundry-faqs"))
            ->add(Url::create("{$baseUrl}/enviornment-health-safety-policy"))
            ->add(Url::create("{$baseUrl}/privacy-policy"))
            ->add(Url::create("{$baseUrl}/laundry-abu-dhabi"))
            ->add(Url::create("{$baseUrl}/jobs"))
            ->add(Url::create("{$baseUrl}/laundry-near-me"))
            ->add(Url::create("{$baseUrl}/linen-rental"))
            ->add(Url::create("{$baseUrl}/laundry-partner"));

        $pagesSitemap->writeToFile(public_path('sitemap-pages.xml'));

        // ✅ Blog sitemap
        $blogs = \App\Models\Blog::all();
        $blogSitemap = Sitemap::create();

        foreach ($blogs as $post) {
            $blogSitemap->add(
                Url::create("{$baseUrl}/blog/{$post->slug}")
                    ->setLastModificationDate(Carbon::parse($post->updated_at))
                    ->setChangeFrequency('weekly')
                    ->setPriority(0.7)
            );
        }

        $blogSitemap->writeToFile(public_path('sitemap-blogs.xml'));

        // ✅ Sitemap Index (master sitemap.xml)
        $sitemapIndex = SitemapIndex::create()
            ->add("{$baseUrl}/sitemap-pages.xml")
            ->add("{$baseUrl}/sitemap-blogs.xml");
            // ->add("{$baseUrl}/sitemap-products.xml"); // enable if needed

        $sitemapIndex->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Multi-sitemap (pages, blogs, products) + index generated successfully!');
    }
}
