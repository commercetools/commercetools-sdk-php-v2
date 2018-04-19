<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\Collection;

interface TransactionCollection extends Collection
{
    /**
     * @param $index
     * @return Transaction
     */
    public function at($index);

    /**
     * @return Transaction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Transaction
     */
    public function map($data, $index);
}
