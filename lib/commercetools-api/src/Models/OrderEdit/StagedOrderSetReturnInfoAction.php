<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ReturnInfoDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetReturnInfoAction extends StagedOrderUpdateAction
{
    public const FIELD_ITEMS = 'items';

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|ReturnInfoDraftCollection
     */
    public function getItems();

    /**
     * @param ?ReturnInfoDraftCollection $items
     */
    public function setItems(?ReturnInfoDraftCollection $items): void;
}
