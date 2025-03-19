<?php

namespace App\Command;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestRedisConnectionCommand extends Command
{
    protected static $defaultName = 'app:test-redis-connection';
    private CacheItemPoolInterface $cache;

    public function __construct(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Tests Redis connection and key storage.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            // Set a test key in Redis
            $cacheItem = $this->cache->getItem('test_redis_key');
            $cacheItem->set('redis_connection_successful');
            $this->cache->save($cacheItem);
            
            // Retrieve the key from Redis
            $retrievedItem = $this->cache->getItem('test_redis_key');
            if ($retrievedItem->isHit() && $retrievedItem->get() === 'redis_connection_successful') {
                $output->writeln('<info>Redis is connected, and keys are being saved successfully!</info>');
            } else {
                $output->writeln('<error>Failed to retrieve the test key from Redis.</error>');
            }
        } catch (\Exception $e) {
            $output->writeln('<error>Redis connection failed: ' . $e->getMessage() . '</error>');
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
