<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface CustomFieldEnumValueCollection extends Collection {
    /**
     * @param $index
     * @return CustomFieldEnumValue
     */
    public function at($index);

    /**
     * @return CustomFieldEnumValue
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomFieldEnumValue
     */
    public function map($data, $index);
}
