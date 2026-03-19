<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Shipping;

interface AddShippingChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Shipping
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Shipping $nextValue
     */
    public function setNextValue(?Shipping $nextValue): void;
}
