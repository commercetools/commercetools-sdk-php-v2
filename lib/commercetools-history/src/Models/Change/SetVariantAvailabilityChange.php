<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ProductVariantAvailability;

interface SetVariantAvailabilityChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_CATALOG_DATA = 'catalogData';
    public const FIELD_VARIANT = 'variant';

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

     * @return null|ProductVariantAvailability
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductVariantAvailability
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
     * <p><code>sku</code> or <code>key</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getVariant();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ProductVariantAvailability $previousValue
     */
    public function setPreviousValue(?ProductVariantAvailability $previousValue): void;

    /**
     * @param ?ProductVariantAvailability $nextValue
     */
    public function setNextValue(?ProductVariantAvailability $nextValue): void;

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;
}
