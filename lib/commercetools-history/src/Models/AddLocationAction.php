<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddLocationAction extends Action
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addLocation</code> on zones</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * <p>Shape of the value for <code>addLocation</code> and <code>removeLocation</code> actions</p>
     *
     * @return null|Location
     */
    public function getPreviousValue();

    /**
     * <p>Shape of the value for <code>addLocation</code> and <code>removeLocation</code> actions</p>
     *
     * @return null|Location
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Location $previousValue
     */
    public function setPreviousValue(?Location $previousValue): void;

    /**
     * @param ?Location $nextValue
     */
    public function setNextValue(?Location $nextValue): void;
}
