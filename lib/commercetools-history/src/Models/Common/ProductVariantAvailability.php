<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductVariantAvailability extends JsonObject
{

    public const FIELD_IS_ON_STOCK = 'isOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    public const FIELD_CHANNELS = 'channels';

    /**

     * @return null|bool
     */
    public function getIsOnStock();

    /**

     * @return null|int
     */
    public function getRestockableInDays();

    /**

     * @return null|int
     */
    public function getAvailableQuantity();

    /**

     * @return null|ProductVariantChannelAvailabilityMap
     */
    public function getChannels();

    /**
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void;

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void;

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void;

    /**
     * @param ?ProductVariantChannelAvailabilityMap $channels
     */
    public function setChannels(?ProductVariantChannelAvailabilityMap $channels): void;
}
