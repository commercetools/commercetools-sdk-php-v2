<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\Reference;

interface PaymentReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return Payment
     */
    public function getObj();

    /**
     * @param Payment $obj
     * @return $this
     */
    public function setObj(Payment $obj);

}
