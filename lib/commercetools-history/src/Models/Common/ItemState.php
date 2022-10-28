<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ItemState extends JsonObject
{

    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';

    /**

     * @return null|int
     */
    public function getQuantity();

    /**

     * @return null|Reference
     */
    public function getState();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Reference $state
     */
    public function setState(?Reference $state): void;
}
