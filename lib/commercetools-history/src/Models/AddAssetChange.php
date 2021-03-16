<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddAssetChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>addAsset</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|Asset
     */
    public function getNextValue();

    /**
     * @return null|Asset
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Asset $nextValue
     */
    public function setNextValue(?Asset $nextValue): void;

    /**
     * @param ?Asset $previousValue
     */
    public function setPreviousValue(?Asset $previousValue): void;
}
