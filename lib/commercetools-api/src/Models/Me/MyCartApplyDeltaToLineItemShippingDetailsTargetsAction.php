<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ItemShippingTargetCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartApplyDeltaToLineItemShippingDetailsTargetsAction extends MyCartUpdateAction
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

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ItemShippingTargetCollection $targetsDelta
     */
    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void;
}
