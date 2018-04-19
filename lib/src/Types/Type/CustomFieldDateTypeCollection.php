<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldDateTypeCollection extends FieldTypeCollection
{
    /**
     * @param $index
     * @return CustomFieldDateType
     */
    public function at($index);

    /**
     * @return CustomFieldDateType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldDateType
     */
    public function map($data, $index);
}
