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

interface RemoveFromCategoryChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CATEGORY = 'category';
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

     * @return null|ReferenceCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getNextValue();

    /**
     * <p>Category from which the Product was removed.</p>
     *

     * @return null|Reference
     */
    public function getCategory();

    /**
     * <p>Product data that was updated.</p>
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
     * @param ?ReferenceCollection $previousValue
     */
    public function setPreviousValue(?ReferenceCollection $previousValue): void;

    /**
     * @param ?ReferenceCollection $nextValue
     */
    public function setNextValue(?ReferenceCollection $nextValue): void;

    /**
     * @param ?Reference $category
     */
    public function setCategory(?Reference $category): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;
}
