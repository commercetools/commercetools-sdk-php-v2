<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface AttributePlainEnumValueCollection extends Collection {
    /**
     * @param $index
     * @return AttributePlainEnumValue
     */
    public function at($index);

    /**
     * @return AttributePlainEnumValue
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributePlainEnumValue
     */
    public function map($data, $index);
}
