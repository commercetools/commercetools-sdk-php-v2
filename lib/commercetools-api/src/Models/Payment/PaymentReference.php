<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * @return null|Payment
     */
    public function getObj();

    /**
     * @param ?Payment $obj
     */
    public function setObj(?Payment $obj): void;
}
