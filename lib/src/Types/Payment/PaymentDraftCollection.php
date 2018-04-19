<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\Collection;

interface PaymentDraftCollection extends Collection
{
    /**
     * @param $index
     * @return PaymentDraft
     */
    public function at($index);

    /**
     * @return PaymentDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentDraft
     */
    public function map($data, $index);
}
