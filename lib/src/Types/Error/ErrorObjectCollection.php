<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\Collection;

interface ErrorObjectCollection extends Collection {
    /**
     * @param $index
     * @return ErrorObject
     */
    public function at($index);

    /**
     * @return ErrorObject
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ErrorObject
     */
    public function map($data, $index);
}
