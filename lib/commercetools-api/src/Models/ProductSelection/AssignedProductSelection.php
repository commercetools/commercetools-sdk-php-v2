<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface AssignedProductSelection extends JsonObject
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';
    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * <p>Reference to the Product Selection that this assignment is part of.</p>
     *

     * @return null|ProductSelectionReference
     */
    public function getProductSelection();

    /**
     * <p>Defines which Variants of the Product will be included from the Product Selection.</p>
     * <p>This field is only available for Assignments to a Product Selection of type <a href="ctp:api:type:IndividualProductSelectionType">Individual</a>.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * <p>Defines which Variants of the Product will be excluded from the Product Selection.</p>
     * <p>This field is only available for Assignments to a Product Selection of type <a href="ctp:api:type:IndividualExclusionProductSelectionType">Individual Exclusion</a>.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion();

    /**
     * <p>Date and time (UTC) this assignment was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}
