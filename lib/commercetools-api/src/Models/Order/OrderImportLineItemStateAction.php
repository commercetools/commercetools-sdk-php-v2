<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderImportLineItemStateAction extends OrderUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_STATE = 'state';

    /**

     * @return null|string
     */
    public function getLineItemId();

    /**

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;
}
