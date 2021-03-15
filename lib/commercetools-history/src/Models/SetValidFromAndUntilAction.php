<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetValidFromAndUntilAction extends Action
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
     * <p>Shape of the value for <code>setValidFromAndUntil</code> action</p>
     *
     * @return null|ValidFromAndUntilValue
     */
    public function getPreviousValue();

    /**
     * <p>Shape of the value for <code>setValidFromAndUntil</code> action</p>
     *
     * @return null|ValidFromAndUntilValue
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ValidFromAndUntilValue $previousValue
     */
    public function setPreviousValue(?ValidFromAndUntilValue $previousValue): void;

    /**
     * @param ?ValidFromAndUntilValue $nextValue
     */
    public function setNextValue(?ValidFromAndUntilValue $nextValue): void;
}
