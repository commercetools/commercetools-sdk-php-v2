<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface AccessDeniedErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return AccessDeniedError
     */
    public function at($index);

    /**
     * @return AccessDeniedError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AccessDeniedError
     */
    public function map($data, $index);
}
