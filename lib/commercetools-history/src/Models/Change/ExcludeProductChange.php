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

interface ExcludeProductChange extends Change
{

    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';
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
     * <p>Only Product Variants with the explicitly listed SKUs are part of a Product Selection with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Reference
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void;

    /**
     * @param ?Reference $nextValue
     */
    public function setNextValue(?Reference $nextValue): void;
}
