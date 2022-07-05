<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\SetCartClassificationShippingRateInputValue;
use Commercetools\History\Models\ChangeValue\SetCartScoreShippingRateInputValue;

interface SetShippingRateInputChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setShippingRateInput</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|mixed
     */
    public function getNextValue();

    /**

     * @return null|mixed
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?JsonObject $nextValue
     */
    public function setNextValue(?JsonObject $nextValue): void;

    /**
     * @param ?JsonObject $previousValue
     */
    public function setPreviousValue(?JsonObject $previousValue): void;
}
