<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\TextLineItem;

interface AddTextLineItemChange extends Change
{

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
     * @return null|TextLineItem
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?TextLineItem $nextValue
     */
    public function setNextValue(?TextLineItem $nextValue): void;
}
