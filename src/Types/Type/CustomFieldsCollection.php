<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface CustomFieldsCollection extends Collection {
    /**
     * @param $index
     * @return CustomFields
     */
    public function at($index);

    /**
     * @return CustomFields
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFields
     */
    public function map($data, $index);
}
