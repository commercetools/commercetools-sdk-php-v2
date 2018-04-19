<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerCreatePasswordResetTokenCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerCreatePasswordResetToken
     */
    public function at($index);

    /**
     * @return CustomerCreatePasswordResetToken
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerCreatePasswordResetToken
     */
    public function map($data, $index);
}
