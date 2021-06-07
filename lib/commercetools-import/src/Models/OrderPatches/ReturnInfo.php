<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ReturnInfo extends JsonObject
{
    public const FIELD_ITEMS = 'items';
    public const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    public const FIELD_RETURN_DATE = 'returnDate';

    /**
     * @return null|ReturnItemDraftCollection
     */
    public function getItems();

    /**
     * <p>Maps to <code>ReturnInfo.returnTrackingId</code></p>
     *
     * @return null|string
     */
    public function getReturnTrackingId();

    /**
     * <p>Maps to <code>ReturnInfo.returnDate</code></p>
     *
     * @return null|DateTimeImmutable
     */
    public function getReturnDate();

    /**
     * @param ?ReturnItemDraftCollection $items
     */
    public function setItems(?ReturnItemDraftCollection $items): void;

    /**
     * @param ?string $returnTrackingId
     */
    public function setReturnTrackingId(?string $returnTrackingId): void;

    /**
     * @param ?DateTimeImmutable $returnDate
     */
    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}
