<?php

namespace ContainerUAqLRq4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8e51c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf5eff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f333 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getConnection', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getMetadataFactory', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getExpressionBuilder', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'beginTransaction', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getCache', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'transactional', array('func' => $func), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'commit', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->commit();
    }

    public function rollback()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'rollback', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'createQuery', array('dql' => $dql), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'createQueryBuilder', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'flush', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'clear', array('entityName' => $entityName), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'close', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->close();
    }

    public function persist($entity)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'persist', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'remove', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'refresh', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'detach', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'merge', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'contains', array('entity' => $entity), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getEventManager', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getConfiguration', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'isOpen', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getUnitOfWork', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getProxyFactory', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'getFilters', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'isFiltersStateClean', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'hasFilters', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return $this->valueHolder8e51c->hasFilters();
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

        $instance->initializerf5eff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8e51c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8e51c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8e51c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, '__get', ['name' => $name], $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        if (isset(self::$publicProperties6f333[$name])) {
            return $this->valueHolder8e51c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e51c;

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

        $targetObject = $this->valueHolder8e51c;
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
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e51c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8e51c;
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
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, '__isset', array('name' => $name), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e51c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8e51c;
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
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, '__unset', array('name' => $name), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e51c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8e51c;
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
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, '__clone', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        $this->valueHolder8e51c = clone $this->valueHolder8e51c;
    }

    public function __sleep()
    {
        $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, '__sleep', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;

        return array('valueHolder8e51c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf5eff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf5eff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf5eff && ($this->initializerf5eff->__invoke($valueHolder8e51c, $this, 'initializeProxy', array(), $this->initializerf5eff) || 1) && $this->valueHolder8e51c = $valueHolder8e51c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8e51c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8e51c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
