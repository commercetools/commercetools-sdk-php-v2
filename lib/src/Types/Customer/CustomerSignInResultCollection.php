<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerSignInResultCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerSignInResult
     */
    public function at($index);

    /**
     * @return CustomerSignInResult
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSignInResult
     */
    public function map($data, $index);
}
