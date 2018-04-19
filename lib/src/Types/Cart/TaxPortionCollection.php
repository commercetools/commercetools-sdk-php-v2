<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface TaxPortionCollection extends Collection
{
    /**
     * @param $index
     * @return TaxPortion
     */
    public function at($index);

    /**
     * @return TaxPortion
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxPortion
     */
    public function map($data, $index);
}
