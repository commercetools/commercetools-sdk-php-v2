<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void;
}
