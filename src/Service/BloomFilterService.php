<?php

namespace App\Service;

use Predis\Client;

class BloomFilterService
{

    public function addPage(string $contentHash): bool
    {
        $redis = new Client([
            'scheme' => 'tcp',
            'host'   => '172.19.0.2',
            'port'   => 6379,
        ]);
        $test = $redis->bfadd("this is a test", 0.01, 1000);
        dd($test);
        // return $redis->bfadd("crawl_test", $contentHash);
        // Add the hashed content to the Bloom filter
    }

    public function isPageCrawled(string $contentHash): bool
    {
        $redis = new Client([
            'host'   => '172.19.0.2',
            'scheme' => 'tcp',
            'port'   => 6379,
        ]);
        // Check if the page has already been crawled (hash is present)
        $redis->bfexists("crawl_tes", $contentHash);
        return true;
    }
}
