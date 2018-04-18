<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldSetTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldSetType
     */
    public function at($index);

    /**
     * @return CustomFieldSetType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldSetType
     */
    public function map($data, $index);
}
