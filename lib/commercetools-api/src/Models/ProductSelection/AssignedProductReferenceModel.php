<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssignedProductReferenceModel extends JsonObjectModel implements AssignedProductReference
{
    /**
     *
     * @var ?ProductReference
     */
    protected $product;

    /**
     *
     * @var ?ProductVariantSelection
     */
    protected $variantSelection;

    /**
     *
     * @var ?ProductVariantExclusion
     */
    protected $variantExclusion;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?ProductVariantSelection $variantSelection = null,
        ?ProductVariantExclusion $variantExclusion = null
    ) {
        $this->product = $product;
        $this->variantSelection = $variantSelection;
        $this->variantExclusion = $variantExclusion;
    }

    /**
     * <p>Reference to a Product that is assigned to the Product Selection.</p>
     *
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>The Variants of the Product that are included from the Product Selection.</p>
     * <p>This field may exist only for the <a href="ctp:api:type:IndividualProductSelectionType">IndividualProductSelectionType</a>.
     * In absence of this field, all Variants are deemed to be included.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getVariantSelection()
    {
        if (is_null($this->variantSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->variantSelection = ProductVariantSelectionModel::of($data);
        }

        return $this->variantSelection;
    }

    /**
     * <p>The Variants of the Product that are excluded from the Product Selection.</p>
     * <p>This field may exist only for the <a href="ctp:api:type:IndividualExclusionProductSelectionType">IndividualExclusionProductSelectionType</a>.
     * In absence of this field, all Variants are deemed to be excluded.</p>
     *
     *
     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion()
    {
        if (is_null($this->variantExclusion)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_EXCLUSION);
            if (is_null($data)) {
                return null;
            }

            $this->variantExclusion = ProductVariantExclusionModel::of($data);
        }

        return $this->variantExclusion;
    }


    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void
    {
        $this->variantSelection = $variantSelection;
    }

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void
    {
        $this->variantExclusion = $variantExclusion;
    }
}
