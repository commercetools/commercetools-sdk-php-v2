<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerChangePasswordCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerChangePassword
     */
    public function at($index);

    /**
     * @return CustomerChangePassword
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerChangePassword
     */
    public function map($data, $index);
}
