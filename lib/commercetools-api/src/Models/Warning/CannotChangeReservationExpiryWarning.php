<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CannotChangeReservationExpiryWarning extends WarningObject
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The reservation expiration for line item $lineItemId cannot be changed.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>The ID of the Line Item.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;
}
