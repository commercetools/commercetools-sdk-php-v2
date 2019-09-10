<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ReturnItemDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use DateTimeImmutable;

interface StagedOrderAddReturnInfoAction extends StagedOrderUpdateAction
{
    const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    const FIELD_ITEMS = 'items';
    const FIELD_RETURN_DATE = 'returnDate';

    /**
     * @return null|string
     */
    public function getReturnTrackingId();

    /**
     * @return null|ReturnItemDraftCollection
     */
    public function getItems();

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate();

    public function setReturnTrackingId(?string $returnTrackingId): void;

    public function setItems(?ReturnItemDraftCollection $items): void;

    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}
