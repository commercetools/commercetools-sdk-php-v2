<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface AttributeDefinitionCollection extends Collection
{
    /**
     * @param $index
     * @return AttributeDefinition
     */
    public function at($index);

    /**
     * @return AttributeDefinition
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeDefinition
     */
    public function map($data, $index);
}
