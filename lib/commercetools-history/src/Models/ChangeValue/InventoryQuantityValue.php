<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface InventoryQuantityValue extends JsonObject
{

    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';

    /**
     * <p>Overall amount of stock (<code>availableQuantity</code> + reserved).</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * <p>Available amount of stock (<code>quantityOnStock</code> - reserved).</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void;

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void;
}
