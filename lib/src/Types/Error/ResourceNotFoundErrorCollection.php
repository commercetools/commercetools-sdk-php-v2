<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface ResourceNotFoundErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return ResourceNotFoundError
     */
    public function at($index);

    /**
     * @return ResourceNotFoundError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ResourceNotFoundError
     */
    public function map($data, $index);
}
