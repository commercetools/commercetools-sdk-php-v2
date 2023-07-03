<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\KeyReference;

interface ChangeParentUnitChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|KeyReference
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|KeyReference
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?KeyReference $previousValue
     */
    public function setPreviousValue(?KeyReference $previousValue): void;

    /**
     * @param ?KeyReference $nextValue
     */
    public function setNextValue(?KeyReference $nextValue): void;
}
