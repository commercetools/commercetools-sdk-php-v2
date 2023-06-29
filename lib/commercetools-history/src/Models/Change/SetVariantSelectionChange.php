<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ProductVariantSelection;
use Commercetools\History\Models\Common\Reference;

interface SetVariantSelectionChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PRODUCT = 'product';

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

     * @return null|ProductVariantSelection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getNextValue();

    /**
     * <p>Reference to the updated <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|Reference
     */
    public function getProduct();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ProductVariantSelection $previousValue
     */
    public function setPreviousValue(?ProductVariantSelection $previousValue): void;

    /**
     * @param ?ProductVariantSelection $nextValue
     */
    public function setNextValue(?ProductVariantSelection $nextValue): void;

    /**
     * @param ?Reference $product
     */
    public function setProduct(?Reference $product): void;
}
