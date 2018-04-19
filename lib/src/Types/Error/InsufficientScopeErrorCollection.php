<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface InsufficientScopeErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return InsufficientScopeError
     */
    public function at($index);

    /**
     * @return InsufficientScopeError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return InsufficientScopeError
     */
    public function map($data, $index);
}
