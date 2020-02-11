<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\State\StateReference;

interface ItemState extends JsonObject
{

    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|StateReference
     */
    public function getState();

    public function setQuantity(?int $quantity): void;

    public function setState(?StateReference $state): void;
}
