<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

interface ProductVariantAvailability extends JsonObject
{
    const FIELD_IS_ON_STOCK = 'isOnStock';
    const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    const FIELD_CHANNELS = 'channels';

    /**
     * @return mixed
     */
    public function getIsOnStock();

    /**
     * @return int
     */
    public function getRestockableInDays();

    /**
     * @return int
     */
    public function getAvailableQuantity();

    /**
     * @return ProductVariantChannelAvailabilityMap
     */
    public function getChannels();

    /**
     * @param mixed $isOnStock
     * @return $this
     */
    public function setIsOnStock($isOnStock);

    /**
     * @param int $restockableInDays
     * @return $this
     */
    public function setRestockableInDays(int $restockableInDays);

    /**
     * @param int $availableQuantity
     * @return $this
     */
    public function setAvailableQuantity(int $availableQuantity);

    /**
     * @param ProductVariantChannelAvailabilityMap $channels
     * @return $this
     */
    public function setChannels(ProductVariantChannelAvailabilityMap $channels);

}
