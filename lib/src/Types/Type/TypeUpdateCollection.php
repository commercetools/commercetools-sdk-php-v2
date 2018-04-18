<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateCollection;


interface TypeUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return TypeUpdate
     */
    public function at($index);

    /**
     * @return TypeUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeUpdate
     */
    public function map($data, $index);
}
