<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldDateTimeTypeCollection extends FieldTypeCollection
{
    /**
     * @param $index
     * @return CustomFieldDateTimeType
     */
    public function at($index);

    /**
     * @return CustomFieldDateTimeType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldDateTimeType
     */
    public function map($data, $index);
}
