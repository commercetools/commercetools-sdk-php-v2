<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ProductVariantExclusion;
use Commercetools\History\Models\Common\Reference;

interface SetVariantExclusionChange extends Change
{

    public const FIELD_PRODUCT = 'product';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Reference to the updated <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|Reference
     */
    public function getProduct();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Reference $product
     */
    public function setProduct(?Reference $product): void;

    /**
     * @param ?ProductVariantExclusion $previousValue
     */
    public function setPreviousValue(?ProductVariantExclusion $previousValue): void;

    /**
     * @param ?ProductVariantExclusion $nextValue
     */
    public function setNextValue(?ProductVariantExclusion $nextValue): void;
}
