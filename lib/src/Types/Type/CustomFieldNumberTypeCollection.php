<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldNumberTypeCollection extends FieldTypeCollection
{
    /**
     * @param $index
     * @return CustomFieldNumberType
     */
    public function at($index);

    /**
     * @return CustomFieldNumberType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldNumberType
     */
    public function map($data, $index);
}
