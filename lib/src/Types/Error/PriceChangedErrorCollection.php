<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface PriceChangedErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return PriceChangedError
     */
    public function at($index);

    /**
     * @return PriceChangedError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PriceChangedError
     */
    public function map($data, $index);
}
