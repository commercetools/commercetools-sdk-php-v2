<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerTokenCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerToken
     */
    public function at($index);

    /**
     * @return CustomerToken
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerToken
     */
    public function map($data, $index);
}
