<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeEnumValueOrderActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeChangeEnumValueOrderAction
     */
    public function at($index);

    /**
     * @return TypeChangeEnumValueOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeEnumValueOrderAction
     */
    public function map($data, $index);
}
