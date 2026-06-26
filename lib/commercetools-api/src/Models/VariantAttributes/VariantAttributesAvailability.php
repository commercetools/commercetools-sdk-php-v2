<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantAttributesAvailability extends JsonObject
{
    public const FIELD_IS_ON_STOCK = 'isOnStock';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    public const FIELD_CHANNELS = 'channels';

    /**
     * <p>Indicates whether the Variant is in stock.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock();

    /**
     * <p>Number of items of this Variant that are in stock.</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * <p>Per-channel availability for the requested supply <a href="ctp:api:type:Channel">Channels</a>.
     * Present only when the <code>filter[supplyChannels]</code> query parameter is provided.</p>
     *

     * @return null|VariantAttributesChannelAvailabilityMap
     */
    public function getChannels();

    /**
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void;

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void;

    /**
     * @param ?VariantAttributesChannelAvailabilityMap $channels
     */
    public function setChannels(?VariantAttributesChannelAvailabilityMap $channels): void;
}
