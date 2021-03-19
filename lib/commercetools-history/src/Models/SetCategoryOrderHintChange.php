<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetCategoryOrderHintChange extends Change
{

    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_CATEGORY_ID = 'categoryId';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setCategoryOrderHint</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getCatalogData();

    /**
     * @return null|string
     */
    public function getCategoryId();

    /**
     * @return null|CategoryOrderHints
     */
    public function getPreviousValue();

    /**
     * @return null|CategoryOrderHints
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
     * @param ?string $categoryId
     */
    public function setCategoryId(?string $categoryId): void;

    /**
     * @param ?CategoryOrderHints $previousValue
     */
    public function setPreviousValue(?CategoryOrderHints $previousValue): void;

    /**
     * @param ?CategoryOrderHints $nextValue
     */
    public function setNextValue(?CategoryOrderHints $nextValue): void;
}
