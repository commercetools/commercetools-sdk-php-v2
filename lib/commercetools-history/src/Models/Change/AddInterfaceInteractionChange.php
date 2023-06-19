<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\CustomFieldExpandedValue;

interface AddInterfaceInteractionChange extends Change
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
     * <p>Value after the change.</p>
     *

     * @return null|CustomFieldExpandedValue
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?CustomFieldExpandedValue $nextValue
     */
    public function setNextValue(?CustomFieldExpandedValue $nextValue): void;
}
