<?php

namespace ContainerPGqYR4D;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b406 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerae37c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2559 = [
        
    ];

    public function getConnection()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getConnection', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getMetadataFactory', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getExpressionBuilder', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'beginTransaction', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getCache', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getCache();
    }

    public function transactional($func)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'transactional', array('func' => $func), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'wrapInTransaction', array('func' => $func), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'commit', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->commit();
    }

    public function rollback()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'rollback', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getClassMetadata', array('className' => $className), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'createQuery', array('dql' => $dql), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'createNamedQuery', array('name' => $name), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'createQueryBuilder', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'flush', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'clear', array('entityName' => $entityName), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->clear($entityName);
    }

    public function close()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'close', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->close();
    }

    public function persist($entity)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'persist', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'remove', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'refresh', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'detach', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'merge', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'contains', array('entity' => $entity), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getEventManager', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getConfiguration', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'isOpen', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getUnitOfWork', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getProxyFactory', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'initializeObject', array('obj' => $obj), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'getFilters', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'isFiltersStateClean', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'hasFilters', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return $this->valueHolder6b406->hasFilters();
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

        $instance->initializerae37c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6b406) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b406 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b406->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, '__get', ['name' => $name], $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        if (isset(self::$publicPropertiesa2559[$name])) {
            return $this->valueHolder6b406->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b406;

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

        $targetObject = $this->valueHolder6b406;
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
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b406;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b406;
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
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, '__isset', array('name' => $name), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b406;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b406;
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
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, '__unset', array('name' => $name), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b406;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b406;
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
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, '__clone', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        $this->valueHolder6b406 = clone $this->valueHolder6b406;
    }

    public function __sleep()
    {
        $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, '__sleep', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;

        return array('valueHolder6b406');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae37c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae37c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerae37c && ($this->initializerae37c->__invoke($valueHolder6b406, $this, 'initializeProxy', array(), $this->initializerae37c) || 1) && $this->valueHolder6b406 = $valueHolder6b406;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b406;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b406;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
