<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeValueAction extends Action
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
     * @return null|ChangeValueActionValue
     */
    public function getNextValue();

    /**
     * @return null|ChangeValueActionValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ChangeValueActionValue $nextValue
     */
    public function setNextValue(?ChangeValueActionValue $nextValue): void;

    /**
     * @param ?ChangeValueActionValue $previousValue
     */
    public function setPreviousValue(?ChangeValueActionValue $previousValue): void;
}
