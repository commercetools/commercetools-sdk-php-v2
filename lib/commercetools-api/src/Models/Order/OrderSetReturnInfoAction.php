<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetReturnInfoAction extends OrderUpdateAction
{
    public const FIELD_ITEMS = 'items';

    /**
     * @return null|ReturnInfoDraftCollection
     */
    public function getItems();

    /**
     * @param ?ReturnInfoDraftCollection $items
     */
    public function setItems(?ReturnInfoDraftCollection $items): void;
}
