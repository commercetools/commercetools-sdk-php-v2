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
use Commercetools\History\Models\Common\ReferenceCollection;

interface AddToCategoryChange extends Change
{

    public const FIELD_CATEGORY = 'category';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addToCategory</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|Reference
     */
    public function getCategory();

    /**
     * @return null|ReferenceCollection
     */
    public function getPreviousValue();

    /**
     * @return null|ReferenceCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Reference $category
     */
    public function setCategory(?Reference $category): void;

    /**
     * @param ?ReferenceCollection $previousValue
     */
    public function setPreviousValue(?ReferenceCollection $previousValue): void;

    /**
     * @param ?ReferenceCollection $nextValue
     */
    public function setNextValue(?ReferenceCollection $nextValue): void;
}
