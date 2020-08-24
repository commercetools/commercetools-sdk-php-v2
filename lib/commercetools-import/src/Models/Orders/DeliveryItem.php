<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryItem extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|float
     */
    public function getQuantity();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void;
}
