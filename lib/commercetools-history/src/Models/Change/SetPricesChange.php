<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\PriceCollection;

interface SetPricesChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_VARIANT = 'variant';
    public const FIELD_ADDED_ITEMS = 'addedItems';
    public const FIELD_REMOVED_ITEMS = 'removedItems';

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

     * @return null|PriceCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|PriceCollection
     */
    public function getNextValue();

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
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant();

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|PriceCollection
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|PriceCollection
     */
    public function getRemovedItems();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?PriceCollection $previousValue
     */
    public function setPreviousValue(?PriceCollection $previousValue): void;

    /**
     * @param ?PriceCollection $nextValue
     */
    public function setNextValue(?PriceCollection $nextValue): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;

    /**
     * @param ?PriceCollection $addedItems
     */
    public function setAddedItems(?PriceCollection $addedItems): void;

    /**
     * @param ?PriceCollection $removedItems
     */
    public function setRemovedItems(?PriceCollection $removedItems): void;
}
