<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface AttributeLocalizedEnumValueCollection extends Collection {
    /**
     * @param $index
     * @return AttributeLocalizedEnumValue
     */
    public function at($index);

    /**
     * @return AttributeLocalizedEnumValue
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeLocalizedEnumValue
     */
    public function map($data, $index);
}
