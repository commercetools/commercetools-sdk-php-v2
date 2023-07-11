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

interface ReturnInfo extends JsonObject
{
    public const FIELD_ITEMS = 'items';
    public const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    public const FIELD_RETURN_DATE = 'returnDate';

    /**
     * <p>Information on the Line Items or Custom Line Items returned.</p>
     *

     * @return null|ReturnItemCollection
     */
    public function getItems();

    /**
     * <p>User-defined identifier to track the return.</p>
     *

     * @return null|string
     */
    public function getReturnTrackingId();

    /**
     * <p>Date and time (UTC) the return is initiated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getReturnDate();

    /**
     * @param ?ReturnItemCollection $items
     */
    public function setItems(?ReturnItemCollection $items): void;

    /**
     * @param ?string $returnTrackingId
     */
    public function setReturnTrackingId(?string $returnTrackingId): void;

    /**
     * @param ?DateTimeImmutable $returnDate
     */
    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}
