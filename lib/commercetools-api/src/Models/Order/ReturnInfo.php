<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ReturnInfo extends JsonObject
{
    const FIELD_ITEMS = 'items';
    const FIELD_RETURN_TRACKING_ID = 'returnTrackingId';
    const FIELD_RETURN_DATE = 'returnDate';

    /**
     * @return null|ReturnItemCollection
     */
    public function getItems();

    /**
     * <p>Identifies, which return tracking ID is connected to this particular return.</p>.
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
