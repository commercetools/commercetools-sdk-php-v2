<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderChangeCustomLineItemQuantityAction extends StagedOrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_QUANTITY = 'quantity';

    /**

     * @return null|string
     */
    public function getCustomLineItemId();

    /**

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
