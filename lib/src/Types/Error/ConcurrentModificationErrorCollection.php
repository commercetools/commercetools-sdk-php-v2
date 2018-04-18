<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface ConcurrentModificationErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return ConcurrentModificationError
     */
    public function at($index);

    /**
     * @return ConcurrentModificationError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ConcurrentModificationError
     */
    public function map($data, $index);
}
