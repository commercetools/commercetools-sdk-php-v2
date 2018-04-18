<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldReferenceTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldReferenceType
     */
    public function at($index);

    /**
     * @return CustomFieldReferenceType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldReferenceType
     */
    public function map($data, $index);
}
