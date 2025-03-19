<?php

namespace ContainerNyhjCuV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder959fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5f6a7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc5d2a = [
        
    ];

    public function getConnection()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getConnection', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getMetadataFactory', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getExpressionBuilder', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'beginTransaction', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getCache', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'transactional', array('func' => $func), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'commit', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->commit();
    }

    public function rollback()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'rollback', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'createQuery', array('dql' => $dql), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'createQueryBuilder', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'flush', array('entity' => $entity), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'clear', array('entityName' => $entityName), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->clear($entityName);
    }

    public function close()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'close', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->close();
    }

    public function persist($entity)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'persist', array('entity' => $entity), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'remove', array('entity' => $entity), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'detach', array('entity' => $entity), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'merge', array('entity' => $entity), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'contains', array('entity' => $entity), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getEventManager', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getConfiguration', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'isOpen', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getUnitOfWork', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getProxyFactory', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'getFilters', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'isFiltersStateClean', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'hasFilters', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return $this->valueHolder959fa->hasFilters();
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

        $instance->initializer5f6a7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder959fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder959fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder959fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, '__get', ['name' => $name], $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        if (isset(self::$publicPropertiesc5d2a[$name])) {
            return $this->valueHolder959fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder959fa;

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

        $targetObject = $this->valueHolder959fa;
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
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder959fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder959fa;
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
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, '__isset', array('name' => $name), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder959fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder959fa;
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
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, '__unset', array('name' => $name), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder959fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder959fa;
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
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, '__clone', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        $this->valueHolder959fa = clone $this->valueHolder959fa;
    }

    public function __sleep()
    {
        $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, '__sleep', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;

        return array('valueHolder959fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer5f6a7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5f6a7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5f6a7 && ($this->initializer5f6a7->__invoke($valueHolder959fa, $this, 'initializeProxy', array(), $this->initializer5f6a7) || 1) && $this->valueHolder959fa = $valueHolder959fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder959fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder959fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
