<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\ResourceCollection;


interface PaymentCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return Payment
     */
    public function at($index);

    /**
     * @return Payment
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Payment
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Payment
     */
    public function byId($id);

}
