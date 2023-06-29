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

interface AddProductChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Reference
     */
    public function getNextValue();

    /**
     * <p>The <a href="ctp:api:type:ProductVariant">Product Variants</a> included in the <a href="ctp:api:type:ProductSelection">Product Selection</a>.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Reference $nextValue
     */
    public function setNextValue(?Reference $nextValue): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;
}
