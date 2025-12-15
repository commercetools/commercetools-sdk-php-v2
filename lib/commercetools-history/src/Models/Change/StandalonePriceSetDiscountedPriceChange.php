<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\DiscountedPrice;

interface StandalonePriceSetDiscountedPriceChange extends Change
{

    public const FIELD_STAGED = 'staged';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
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
     * <p>Indicates if the change was applied to the staged or current price.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?DiscountedPrice $previousValue
     */
    public function setPreviousValue(?DiscountedPrice $previousValue): void;

    /**
     * @param ?DiscountedPrice $nextValue
     */
    public function setNextValue(?DiscountedPrice $nextValue): void;
}
