<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InvalidFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return InvalidFieldError
     */
    public function at($index);

    /**
     * @return InvalidFieldError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InvalidFieldError
     */
    public function map($data, $index);
}
