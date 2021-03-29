<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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
     * @return null|string
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
     * @param ?string $returnDate
     */
    public function setReturnDate(?string $returnDate): void;
}
