<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddReturnInfoChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addReturnInfo</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|ReturnInfo
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ReturnInfo $nextValue
     */
    public function setNextValue(?ReturnInfo $nextValue): void;
}
