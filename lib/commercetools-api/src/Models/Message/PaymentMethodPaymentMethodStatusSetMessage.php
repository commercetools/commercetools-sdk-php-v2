<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodPaymentMethodStatusSetMessage extends Message
{
    public const FIELD_STATUS = 'status';
    public const FIELD_OLD_STATUS = 'oldStatus';

    /**
     * <p>Status of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetPaymentMethodStatusAction">Set PaymentMethodStatus</a> update action.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>Status of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetPaymentMethodStatusAction">Set PaymentMethodStatus</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldStatus();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?string $oldStatus
     */
    public function setOldStatus(?string $oldStatus): void;
}
