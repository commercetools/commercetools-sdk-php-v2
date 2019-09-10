<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Reference;

interface PaymentReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return null|Payment
     */
    public function getObj();

    public function setObj(?Payment $obj): void;
}
