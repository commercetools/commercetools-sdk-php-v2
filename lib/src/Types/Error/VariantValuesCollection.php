<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\Collection;

interface VariantValuesCollection extends Collection
{
    /**
     * @param $index
     * @return VariantValues
     */
    public function at($index);

    /**
     * @return VariantValues
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return VariantValues
     */
    public function map($data, $index);
}
