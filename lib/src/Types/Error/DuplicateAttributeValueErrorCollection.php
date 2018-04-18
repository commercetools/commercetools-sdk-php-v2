<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface DuplicateAttributeValueErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return DuplicateAttributeValueError
     */
    public function at($index);

    /**
     * @return DuplicateAttributeValueError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DuplicateAttributeValueError
     */
    public function map($data, $index);
}
