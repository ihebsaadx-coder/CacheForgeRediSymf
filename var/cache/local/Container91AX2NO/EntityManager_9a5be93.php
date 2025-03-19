<?php

namespace Container91AX2NO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfaa60 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercebd1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties29d10 = [
        
    ];

    public function getConnection()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getConnection', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getMetadataFactory', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getExpressionBuilder', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'beginTransaction', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getCache', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getCache();
    }

    public function transactional($func)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'transactional', array('func' => $func), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'wrapInTransaction', array('func' => $func), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'commit', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->commit();
    }

    public function rollback()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'rollback', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getClassMetadata', array('className' => $className), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'createQuery', array('dql' => $dql), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'createNamedQuery', array('name' => $name), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'createQueryBuilder', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'flush', array('entity' => $entity), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'clear', array('entityName' => $entityName), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->clear($entityName);
    }

    public function close()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'close', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->close();
    }

    public function persist($entity)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'persist', array('entity' => $entity), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'remove', array('entity' => $entity), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'detach', array('entity' => $entity), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'merge', array('entity' => $entity), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getRepository', array('entityName' => $entityName), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'contains', array('entity' => $entity), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getEventManager', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getConfiguration', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'isOpen', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getUnitOfWork', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getProxyFactory', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'initializeObject', array('obj' => $obj), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'getFilters', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'isFiltersStateClean', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'hasFilters', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return $this->valueHolderfaa60->hasFilters();
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

        $instance->initializercebd1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderfaa60) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfaa60 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfaa60->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, '__get', ['name' => $name], $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        if (isset(self::$publicProperties29d10[$name])) {
            return $this->valueHolderfaa60->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa60;

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

        $targetObject = $this->valueHolderfaa60;
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
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa60;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfaa60;
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
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, '__isset', array('name' => $name), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa60;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfaa60;
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
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, '__unset', array('name' => $name), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfaa60;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfaa60;
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
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, '__clone', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        $this->valueHolderfaa60 = clone $this->valueHolderfaa60;
    }

    public function __sleep()
    {
        $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, '__sleep', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;

        return array('valueHolderfaa60');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializercebd1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercebd1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercebd1 && ($this->initializercebd1->__invoke($valueHolderfaa60, $this, 'initializeProxy', array(), $this->initializercebd1) || 1) && $this->valueHolderfaa60 = $valueHolderfaa60;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfaa60;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfaa60;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
