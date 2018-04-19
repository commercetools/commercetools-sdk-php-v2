<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\ReferenceCollection;


interface PaymentReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return PaymentReference
     */
    public function at($index);

    /**
     * @return PaymentReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentReference
     */
    public function map($data, $index);
}
