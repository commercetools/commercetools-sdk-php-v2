<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InvalidOperationErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return InvalidOperationError
     */
    public function at($index);

    /**
     * @return InvalidOperationError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InvalidOperationError
     */
    public function map($data, $index);
}
