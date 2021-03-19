<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MoveImageToPositionChange extends Change
{

    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update actions for moving images</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getCatalogData();

    /**
     * @return null|ImageCollection
     */
    public function getPreviousValue();

    /**
     * @return null|ImageCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;

    /**
     * @param ?ImageCollection $previousValue
     */
    public function setPreviousValue(?ImageCollection $previousValue): void;

    /**
     * @param ?ImageCollection $nextValue
     */
    public function setNextValue(?ImageCollection $nextValue): void;
}
