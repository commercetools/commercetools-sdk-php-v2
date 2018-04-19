<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface AttributeTypeCollection extends Collection
{
    /**
     * @param $index
     * @return AttributeType
     */
    public function at($index);

    /**
     * @return AttributeType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeType
     */
    public function map($data, $index);
}
