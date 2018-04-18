<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface OutOfStockErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return OutOfStockError
     */
    public function at($index);

    /**
     * @return OutOfStockError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OutOfStockError
     */
    public function map($data, $index);
}
