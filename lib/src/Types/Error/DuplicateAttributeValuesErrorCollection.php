<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface DuplicateAttributeValuesErrorCollection extends ErrorObjectCollection {
    /**
     * @param $index
     * @return DuplicateAttributeValuesError
     */
    public function at($index);

    /**
     * @return DuplicateAttributeValuesError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DuplicateAttributeValuesError
     */
    public function map($data, $index);
}
