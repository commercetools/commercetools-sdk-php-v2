<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\StateKeyReference;

interface ItemState extends JsonObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';

    /**
     * @return null|float
     */
    public function getQuantity();

    /**
     * <p>Maps to <code>ItemState.state</code>.</p>
     *
     * @return null|StateKeyReference
     */
    public function getState();

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void;

    /**
     * @param ?StateKeyReference $state
     */
    public function setState(?StateKeyReference $state): void;
}
