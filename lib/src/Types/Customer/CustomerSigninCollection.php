<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerSigninCollection extends Collection {
    /**
     * @param $index
     * @return CustomerSignin
     */
    public function at($index);

    /**
     * @return CustomerSignin
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSignin
     */
    public function map($data, $index);
}
