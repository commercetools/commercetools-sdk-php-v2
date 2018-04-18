<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldEnumTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldEnumType
     */
    public function at($index);

    /**
     * @return CustomFieldEnumType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldEnumType
     */
    public function map($data, $index);
}
