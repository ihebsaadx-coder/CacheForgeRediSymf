<?php

namespace ContainerX4wdrmx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder58dcc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58a98 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfdbea = [
        
    ];

    public function getConnection()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getConnection', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getMetadataFactory', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getExpressionBuilder', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'beginTransaction', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getCache', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'transactional', array('func' => $func), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'commit', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->commit();
    }

    public function rollback()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'rollback', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getClassMetadata', array('className' => $className), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'createQuery', array('dql' => $dql), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'createNamedQuery', array('name' => $name), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'createQueryBuilder', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'flush', array('entity' => $entity), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'clear', array('entityName' => $entityName), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->clear($entityName);
    }

    public function close()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'close', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->close();
    }

    public function persist($entity)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'persist', array('entity' => $entity), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'remove', array('entity' => $entity), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'detach', array('entity' => $entity), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'merge', array('entity' => $entity), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'contains', array('entity' => $entity), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getEventManager', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getConfiguration', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'isOpen', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getUnitOfWork', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getProxyFactory', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'initializeObject', array('obj' => $obj), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'getFilters', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'isFiltersStateClean', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'hasFilters', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return $this->valueHolder58dcc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer58a98 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder58dcc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder58dcc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder58dcc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, '__get', ['name' => $name], $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        if (isset(self::$publicPropertiesfdbea[$name])) {
            return $this->valueHolder58dcc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58dcc;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder58dcc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58dcc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder58dcc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, '__isset', array('name' => $name), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58dcc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder58dcc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, '__unset', array('name' => $name), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58dcc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder58dcc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, '__clone', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        $this->valueHolder58dcc = clone $this->valueHolder58dcc;
    }

    public function __sleep()
    {
        $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, '__sleep', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;

        return array('valueHolder58dcc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer58a98 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58a98;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58a98 && ($this->initializer58a98->__invoke($valueHolder58dcc, $this, 'initializeProxy', array(), $this->initializer58a98) || 1) && $this->valueHolder58dcc = $valueHolder58dcc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder58dcc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58dcc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
