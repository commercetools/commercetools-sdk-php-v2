<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantAttributesChannelAvailability extends JsonObject
{
    public const FIELD_IS_ON_STOCK = 'isOnStock';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';

    /**
     * <p>Indicates whether the Variant is in stock in the specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock();

    /**
     * <p>Number of items of this Variant that are in stock in the specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void;

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void;
}
