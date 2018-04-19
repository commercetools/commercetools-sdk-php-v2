<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeAddLocalizedEnumValueActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeAddLocalizedEnumValueAction
     */
    public function at($index);

    /**
     * @return TypeAddLocalizedEnumValueAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeAddLocalizedEnumValueAction
     */
    public function map($data, $index);
}
