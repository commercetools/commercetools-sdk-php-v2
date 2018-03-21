<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

interface MapperAware
{
    /**
     * @param Mapper $mapper
     */
    public function setMapper(Mapper $mapper);

    /**
     * @returns Mapper
     */
    public function getMapper(): Mapper;
}
