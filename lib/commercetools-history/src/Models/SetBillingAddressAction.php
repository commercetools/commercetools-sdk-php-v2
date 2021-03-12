<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetBillingAddressAction extends Action
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setBillingAddress</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|Address
     */
    public function getNextValue();

    /**
     * @return null|Address
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Address $nextValue
     */
    public function setNextValue(?Address $nextValue): void;

    /**
     * @param ?Address $previousValue
     */
    public function setPreviousValue(?Address $previousValue): void;
}
