<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InvalidCurrentPasswordErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return InvalidCurrentPasswordError
     */
    public function at($index);

    /**
     * @return InvalidCurrentPasswordError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InvalidCurrentPasswordError
     */
    public function map($data, $index);
}
