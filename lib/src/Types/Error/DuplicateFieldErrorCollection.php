<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface DuplicateFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return DuplicateFieldError
     */
    public function at($index);

    /**
     * @return DuplicateFieldError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DuplicateFieldError
     */
    public function map($data, $index);
}
