<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurringOrder\RecurringOrder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderCreatedMessagePayload extends MessagePayload
{
    public const FIELD_ORDER = 'order';

    /**
     * <p><a href="ctp:api:type:RecurringOrder">RecurringOrder</a> that was created.</p>
     *

     * @return null|RecurringOrder
     */
    public function getOrder();

    /**
     * @param ?RecurringOrder $order
     */
    public function setOrder(?RecurringOrder $order): void;
}
