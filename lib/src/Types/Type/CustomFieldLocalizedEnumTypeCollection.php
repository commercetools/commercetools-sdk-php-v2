<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldLocalizedEnumTypeCollection extends FieldTypeCollection
{
    /**
     * @param $index
     * @return CustomFieldLocalizedEnumType
     */
    public function at($index);

    /**
     * @return CustomFieldLocalizedEnumType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldLocalizedEnumType
     */
    public function map($data, $index);
}
