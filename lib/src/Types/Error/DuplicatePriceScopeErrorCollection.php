<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface DuplicatePriceScopeErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return DuplicatePriceScopeError
     */
    public function at($index);

    /**
     * @return DuplicatePriceScopeError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DuplicatePriceScopeError
     */
    public function map($data, $index);
}
