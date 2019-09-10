<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface DeliveryItem extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getQuantity();

    public function setId(?string $id): void;

    public function setQuantity(?int $quantity): void;
}
