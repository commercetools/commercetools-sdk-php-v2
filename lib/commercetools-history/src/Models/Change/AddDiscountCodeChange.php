<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\DiscountCodeInfo;

interface AddDiscountCodeChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addDiscountCode</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|DiscountCodeInfo
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?DiscountCodeInfo $nextValue
     */
    public function setNextValue(?DiscountCodeInfo $nextValue): void;
}
