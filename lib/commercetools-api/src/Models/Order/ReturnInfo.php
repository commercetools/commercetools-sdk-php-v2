<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use DateTimeImmutable;

interface ReturnInfo extends JsonObject
{

    public const FIELD_ITEMS = 'items';
    public const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    public const FIELD_RETURN_DATE = 'returnDate';

    /**
     * @return null|ReturnItemCollection
     */
    public function getItems();

    /**
     * <p>Identifies, which return tracking ID is connected to this particular return.</p>
     *
     * @return null|string
     */
    public function getReturnTrackingId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate();

    public function setItems(?ReturnItemCollection $items): void;

    public function setReturnTrackingId(?string $returnTrackingId): void;

    public function setReturnDate(?DateTimeImmutable $returnDate): void;
}
