<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValue;

interface ChangeTargetChange extends Change
{

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
     * <p>Value before the change.</p>
     *

     * @return null|ChangeTargetChangeValue
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ChangeTargetChangeValue
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ChangeTargetChangeValue $previousValue
     */
    public function setPreviousValue(?ChangeTargetChangeValue $previousValue): void;

    /**
     * @param ?ChangeTargetChangeValue $nextValue
     */
    public function setNextValue(?ChangeTargetChangeValue $nextValue): void;
}
