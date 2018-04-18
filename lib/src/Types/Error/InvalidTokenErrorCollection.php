<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InvalidTokenErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return InvalidTokenError
     */
    public function at($index);

    /**
     * @return InvalidTokenError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InvalidTokenError
     */
    public function map($data, $index);
}
