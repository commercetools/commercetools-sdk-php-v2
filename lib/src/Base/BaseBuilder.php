<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

use Commercetools\Types\ModelClassMap;

abstract class BaseBuilder implements MapperAware
{
    private $resultMapper;

    /**
     * @param Mapper $mapper
     */
    public function setMapper(Mapper $mapper)
    {
        $this->resultMapper = $mapper;
    }

    /**
     * @returns Mapper
     */
    public function getMapper(): Mapper
    {
        if (is_null($this->resultMapper)) {
            $this->resultMapper = new ResultMapper(new ModelClassMap());
        }
        return $this->resultMapper;
    }

    /**
     * @param string $class
     * @param mixed $data
     * @return mixed
     */
    protected function mapData(string $class, $data)
    {
        return $this->getMapper()->mapData($class, $data);
    }
}
