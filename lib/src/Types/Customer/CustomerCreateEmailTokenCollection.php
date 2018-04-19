<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerCreateEmailTokenCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerCreateEmailToken
     */
    public function at($index);

    /**
     * @return CustomerCreateEmailToken
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerCreateEmailToken
     */
    public function map($data, $index);
}
