<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Mapper
{
    private static $instance;
   
    private $generator; 
    
    
    private static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function getHydrator($className)
    {
        if (is_null($this->generator)) {
            $this->setGenerator(function ($className) {
                $generator = new HydratorGenerator();
                $hydratorClass = $generator->getHydratorClass($className);
                return new $hydratorClass();
            });
        }
        $generator = $this->generator;
        return $generator($className);
    }
    
    public function setGenerator(callable $fn)
    {
        $this->generator = $fn;
    }
    
    public function mapToClass($value, $className)
    {
        if (!is_null($className)) {
            $hydrator = $this->getHydrator($className);
            $object = new $className();
            $hydrator->hydrate($value, $object);
        } else {
            $object = $value;
        }
        
        return $object;
    }
    
    public static function map($value, $className)
    {
        return self::getInstance()->mapToClass($value, $className);
    }
}
