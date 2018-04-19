<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface DuplicateVariantValuesErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return DuplicateVariantValuesError
     */
    public function at($index);

    /**
     * @return DuplicateVariantValuesError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DuplicateVariantValuesError
     */
    public function map($data, $index);
}
