<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface RequiredFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return RequiredFieldError
     */
    public function at($index);

    /**
     * @return RequiredFieldError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return RequiredFieldError
     */
    public function map($data, $index);
}
