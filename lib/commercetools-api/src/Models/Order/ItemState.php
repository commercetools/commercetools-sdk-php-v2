<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ItemState extends JsonObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';

    /**
     * <p>Number of Line Items or Custom Line Items in this State.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>State of the Line Items or Custom Line Items in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;
}
