<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldBooleanTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldBooleanType
     */
    public function at($index);

    /**
     * @return CustomFieldBooleanType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldBooleanType
     */
    public function map($data, $index);
}
