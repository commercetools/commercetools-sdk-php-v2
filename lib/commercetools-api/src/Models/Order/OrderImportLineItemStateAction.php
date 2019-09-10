<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

interface OrderImportLineItemStateAction extends OrderUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    public function setLineItemId(?string $lineItemId): void;

    public function setState(?ItemStateCollection $state): void;
}
