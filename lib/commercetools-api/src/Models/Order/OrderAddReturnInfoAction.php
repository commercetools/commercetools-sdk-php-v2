<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderAddReturnInfoAction extends OrderUpdateAction
{
    public const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    public const FIELD_ITEMS = 'items';
    public const FIELD_RETURN_DATE = 'returnDate';

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

    /**
     * @param ?string $returnTrackingId
     */
    public function setReturnTrackingId(?string $returnTrackingId): void;

    /**
     * @param ?ReturnItemDraftCollection $items
     */
    public function setItems(?ReturnItemDraftCollection $items): void;

    /**
     * @param ?DateTimeImmutable $returnDate
     */
    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}
