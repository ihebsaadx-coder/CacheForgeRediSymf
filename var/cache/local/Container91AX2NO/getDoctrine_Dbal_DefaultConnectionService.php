<?php

namespace Container91AX2NO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Schema/SchemaManagerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Schema/LegacySchemaManagerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Dbal/SchemaAssetsFilterManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Driver/Middleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Logging/Middleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Middleware/ConnectionNameAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Middleware/DebugMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Tools/DsnParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/src/EventListener/SchemaFilterListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Middleware/Debug/DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Middleware/BacktraceDebugDataHolder.php';

        $a = ($container->privates['doctrine.dbal.default_connection.event_manager'] ?? $container->load('getDoctrine_Dbal_DefaultConnection_EventManagerService'));

        if (isset($container->services['doctrine.dbal.default_connection'])) {
            return $container->services['doctrine.dbal.default_connection'];
        }
        $b = new \Doctrine\DBAL\Configuration();

        $c = new \Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware(($container->privates['doctrine.debug_data_holder'] ?? ($container->privates['doctrine.debug_data_holder'] = new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder([]))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $c->setConnectionName('default');

        $b->setSchemaManagerFactory(new \Doctrine\DBAL\Schema\LegacySchemaManagerFactory());
        $b->setSchemaAssetsFilter(new \Doctrine\Bundle\DoctrineBundle\Dbal\SchemaAssetsFilterManager([0 => ($container->privates['doctrine_migrations.schema_filter_listener'] ?? ($container->privates['doctrine_migrations.schema_filter_listener'] = new \Doctrine\Bundle\MigrationsBundle\EventListener\SchemaFilterListener('doctrine_migration_versions')))]));
        $b->setMiddlewares([0 => new \Doctrine\DBAL\Logging\Middleware(($container->privates['monolog.logger.doctrine'] ?? $container->load('getMonolog_Logger_DoctrineService'))), 1 => $c]);

        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([], new \Doctrine\DBAL\Tools\DsnParser(['db2' => 'ibm_db2', 'mssql' => 'pdo_sqlsrv', 'mysql' => 'pdo_mysql', 'mysql2' => 'pdo_mysql', 'postgres' => 'pdo_pgsql', 'postgresql' => 'pdo_pgsql', 'pgsql' => 'pdo_pgsql', 'sqlite' => 'pdo_sqlite', 'sqlite3' => 'pdo_sqlite'])))->createConnection(['url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'idle_connection_ttl' => 600, 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], $b, $a, []);
    }
}
