<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderRequestOrderNowAction extends RecurringOrderUpdateAction
{
    public const FIELD_REASON = 'reason';

    /**
     * <p>Note recorded on the resulting <a href="ctp:api:type:RecurringOrderNowRequestedMessage">RecurringOrderNowRequested</a> Message.</p>
     * <p>If <code>reason</code> is longer than 256 characters, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getReason();

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void;
}
