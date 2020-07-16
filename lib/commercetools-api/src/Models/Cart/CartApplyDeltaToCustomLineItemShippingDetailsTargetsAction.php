<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction extends CartUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_TARGETS_DELTA = 'targetsDelta';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?ItemShippingTargetCollection $targetsDelta
     */
    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void;
}
