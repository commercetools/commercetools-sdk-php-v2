<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\SearchKeywords;

interface SetSearchKeywordsChange extends Change
{

    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setSearchKeywords</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getCatalogData();

    /**

     * @return null|SearchKeywords
     */
    public function getPreviousValue();

    /**

     * @return null|SearchKeywords
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
     * @param ?SearchKeywords $previousValue
     */
    public function setPreviousValue(?SearchKeywords $previousValue): void;

    /**
     * @param ?SearchKeywords $nextValue
     */
    public function setNextValue(?SearchKeywords $nextValue): void;
}
