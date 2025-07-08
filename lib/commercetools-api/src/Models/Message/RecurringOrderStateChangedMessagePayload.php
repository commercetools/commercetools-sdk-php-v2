<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderStateChangedMessagePayload extends MessagePayload
{
    public const FIELD_STATE = 'state';
    public const FIELD_OLD_STATE = 'oldState';

    /**
     * <p><a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> after the <a href="ctp:api:type:RecurringOrderSetStateAction">Set RecurringOrderState</a> update action.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p><a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> before the <a href="ctp:api:type:RecurringOrderSetStateAction">Set RecurringOrderState</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldState();

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?string $oldState
     */
    public function setOldState(?string $oldState): void;
}
