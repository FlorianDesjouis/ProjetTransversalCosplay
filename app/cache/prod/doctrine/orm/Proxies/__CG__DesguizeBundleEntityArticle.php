<?php

namespace Proxies\__CG__\DesguizeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \DesguizeBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array('path' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->path);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'name', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'dateCreation', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'userId', 'path', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'file', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'price');
        }

        return array('__isInitialized__', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'name', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'dateCreation', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'userId', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'file', '' . "\0" . 'DesguizeBundle\\Entity\\Article' . "\0" . 'price');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->path);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function removeFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFile', array($file));

        return parent::removeFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($userId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', array($userId));

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

}
