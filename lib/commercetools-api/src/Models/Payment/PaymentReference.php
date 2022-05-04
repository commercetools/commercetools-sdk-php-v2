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
     * <p>Contains the representation of the expanded Payment. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Payments.</p>
     *
     * @return null|Payment
     */
    public function getObj();

    /**
     * <p>Platform-generated unique identifier of the referenced <a href="ctp:api:type:Payment">Payment</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Payment $obj
     */
    public function setObj(?Payment $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
