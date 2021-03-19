<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeValueChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>changeValue</code> on cart discounts and product discounts</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|ChangeValueChangeValue
     */
    public function getNextValue();

    /**
     * @return null|ChangeValueChangeValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ChangeValueChangeValue $nextValue
     */
    public function setNextValue(?ChangeValueChangeValue $nextValue): void;

    /**
     * @param ?ChangeValueChangeValue $previousValue
     */
    public function setPreviousValue(?ChangeValueChangeValue $previousValue): void;
}
