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
     * <p><a href="ctp:api:type:Reference">References</a> to the Payments associated with the Order.</p>
     *

     * @return null|PaymentReferenceCollection
     */
    public function getPayments();

    /**
     * @param ?PaymentReferenceCollection $payments
     */
    public function setPayments(?PaymentReferenceCollection $payments): void;
}
