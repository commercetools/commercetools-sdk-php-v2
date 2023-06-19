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

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CATALOG_DATA = 'catalogData';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|SearchKeywords
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|SearchKeywords
     */
    public function getNextValue();

    /**
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?SearchKeywords $previousValue
     */
    public function setPreviousValue(?SearchKeywords $previousValue): void;

    /**
     * @param ?SearchKeywords $nextValue
     */
    public function setNextValue(?SearchKeywords $nextValue): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;
}
