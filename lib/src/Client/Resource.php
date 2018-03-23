<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

use Commercetools\Base\Mapper;
use Commercetools\Base\MapperAware;
use Commercetools\Base\ResultMapper;
use Commercetools\Types\ModelClassMap;

class Resource implements MapperAware
{
    /**
     * @var string
     */
    private $uri;
    /**
     * @var array
     */
    private $args = [];

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * @param string $uri
     * @param array $args
     * @param Mapper|null $mapper
     */
    public function __construct(string $uri, array $args = [], Mapper $mapper = null)
    {
        $this->uri = $uri;
        $this->args = $args;
        $this->mapper = $mapper;
    }

    /**
     * @return string
     */
    final protected function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return array
     */
    final protected function getArgs(): array
    {
        return $this->args;
    }

    /**
     * @param Mapper $mapper
     */
    public function setMapper(Mapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @returns Mapper
     */
    public function getMapper(): Mapper
    {
        if (is_null($this->mapper)) {
            $this->mapper = new ResultMapper(new ModelClassMap());
        }
        return $this->mapper;
    }

    /**
     * @param string $class
     * @param mixed $data
     * @return mixed
     */
    protected function mapData($class, $data)
    {
        return $this->getMapper()->mapData($class, $data);
    }
}
