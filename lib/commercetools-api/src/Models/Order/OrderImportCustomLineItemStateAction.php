<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderImportCustomLineItemStateAction extends OrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setState(?ItemStateCollection $state): void;
}
