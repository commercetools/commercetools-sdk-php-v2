<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerEmailVerifyCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerEmailVerify
     */
    public function at($index);

    /**
     * @return CustomerEmailVerify
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerEmailVerify
     */
    public function map($data, $index);
}
