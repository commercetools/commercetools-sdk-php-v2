<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductVariantChannelAvailability extends JsonObject
{

    public const FIELD_IS_ON_STOCK = 'isOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';

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

    public function setIsOnStock(?bool $isOnStock): void;

    public function setRestockableInDays(?int $restockableInDays): void;

    public function setAvailableQuantity(?int $availableQuantity): void;
}
