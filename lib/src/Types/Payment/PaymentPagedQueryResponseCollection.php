<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\PagedQueryResponseCollection;


interface PaymentPagedQueryResponseCollection extends PagedQueryResponseCollection
{
    /**
     * @param $index
     * @return PaymentPagedQueryResponse
     */
    public function at($index);

    /**
     * @return PaymentPagedQueryResponse
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentPagedQueryResponse
     */
    public function map($data, $index);
}
