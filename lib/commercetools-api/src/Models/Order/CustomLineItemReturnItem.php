<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomLineItemReturnItem extends ReturnItem
{

    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    public function setCustomLineItemId(?string $customLineItemId): void;
}
