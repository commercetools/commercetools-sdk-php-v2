<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldTimeTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldTimeType
     */
    public function at($index);

    /**
     * @return CustomFieldTimeType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldTimeType
     */
    public function map($data, $index);
}
