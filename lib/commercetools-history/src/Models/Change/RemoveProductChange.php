<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Reference;

interface RemoveProductChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for when a product is unassigned from a product selection</p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|Reference
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Reference $previousValue
     */
    public function setPreviousValue(?Reference $previousValue): void;
}
