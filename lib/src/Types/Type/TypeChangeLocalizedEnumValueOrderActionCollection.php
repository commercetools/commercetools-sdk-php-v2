<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeLocalizedEnumValueOrderActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeChangeLocalizedEnumValueOrderAction
     */
    public function at($index);

    /**
     * @return TypeChangeLocalizedEnumValueOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeLocalizedEnumValueOrderAction
     */
    public function map($data, $index);
}
