<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetCustomLineItemShippingDetailsAction extends StagedOrderUpdateAction
{

    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
