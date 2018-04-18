<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollection;


interface CustomFieldMoneyTypeCollection extends FieldTypeCollection {
    /**
     * @param $index
     * @return CustomFieldMoneyType
     */
    public function at($index);

    /**
     * @return CustomFieldMoneyType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldMoneyType
     */
    public function map($data, $index);
}
