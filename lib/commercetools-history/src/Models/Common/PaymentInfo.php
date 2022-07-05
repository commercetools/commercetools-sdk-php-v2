<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface PaymentInfo extends JsonObject
{

    public const FIELD_PAYMENTS = 'payments';

    /**

     * @return null|ReferenceCollection
     */
    public function getPayments();

    /**
     * @param ?ReferenceCollection $payments
     */
    public function setPayments(?ReferenceCollection $payments): void;
}
