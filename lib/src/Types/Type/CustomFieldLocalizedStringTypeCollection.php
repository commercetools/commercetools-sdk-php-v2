<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldLocalizedStringTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldLocalizedStringType
     */
    public function at($index);

    /**
     * @return CustomFieldLocalizedStringType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldLocalizedStringType
     */
    public function map($data, $index);
}
