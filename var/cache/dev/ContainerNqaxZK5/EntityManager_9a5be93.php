<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderfc0e0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49922 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties21034 = [
        
    ];

    public function getConnection()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getConnection', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getMetadataFactory', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getExpressionBuilder', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'beginTransaction', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getCache', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'transactional', array('func' => $func), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->transactional($func);
    }

    public function commit()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'commit', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->commit();
    }

    public function rollback()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'rollback', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getClassMetadata', array('className' => $className), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'createQuery', array('dql' => $dql), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'createNamedQuery', array('name' => $name), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'createQueryBuilder', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'flush', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'clear', array('entityName' => $entityName), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->clear($entityName);
    }

    public function close()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'close', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->close();
    }

    public function persist($entity)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'persist', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'remove', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'refresh', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'detach', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'merge', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'contains', array('entity' => $entity), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getEventManager', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getConfiguration', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'isOpen', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getUnitOfWork', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getProxyFactory', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'initializeObject', array('obj' => $obj), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'getFilters', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'isFiltersStateClean', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'hasFilters', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return $this->valueHolderfc0e0->hasFilters();
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
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer49922 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfc0e0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc0e0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc0e0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, '__get', ['name' => $name], $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        if (isset(self::$publicProperties21034[$name])) {
            return $this->valueHolderfc0e0->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0e0;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderfc0e0;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0e0;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderfc0e0;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, '__isset', array('name' => $name), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0e0;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfc0e0;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, '__unset', array('name' => $name), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0e0;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfc0e0;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, '__clone', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        $this->valueHolderfc0e0 = clone $this->valueHolderfc0e0;
    }

    public function __sleep()
    {
        $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, '__sleep', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;

        return array('valueHolderfc0e0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer49922 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer49922;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49922 && ($this->initializer49922->__invoke($valueHolderfc0e0, $this, 'initializeProxy', array(), $this->initializer49922) || 1) && $this->valueHolderfc0e0 = $valueHolderfc0e0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc0e0;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderfc0e0;
    }


}
