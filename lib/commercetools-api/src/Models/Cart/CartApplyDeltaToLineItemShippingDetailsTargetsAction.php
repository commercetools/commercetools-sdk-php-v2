<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartApplyDeltaToLineItemShippingDetailsTargetsAction extends CartUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_TARGETS_DELTA = 'targetsDelta';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargetsDelta();

    public function setLineItemId(?string $lineItemId): void;

    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void;
}
