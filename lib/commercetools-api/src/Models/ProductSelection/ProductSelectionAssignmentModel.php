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
final class ProductSelectionAssignmentModel extends JsonObjectModel implements ProductSelectionAssignment
{
    /**
     *
     * @var ?ProductReference
     */
    protected $product;

    /**
     *
     * @var ?ProductSelectionReference
     */
    protected $productSelection;

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
        ?ProductSelectionReference $productSelection = null,
        ?ProductVariantSelection $variantSelection = null,
        ?ProductVariantExclusion $variantExclusion = null
    ) {
        $this->product = $product;
        $this->productSelection = $productSelection;
        $this->variantSelection = $variantSelection;
        $this->variantExclusion = $variantExclusion;
    }

    /**
     * <p>Reference to a Product that is assigned to the ProductSelection.</p>
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
     * <p>Reference to the Product Selection that this assignment is part of.</p>
     *
     *
     * @return null|ProductSelectionReference
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ProductSelectionReferenceModel::of($data);
        }

        return $this->productSelection;
    }

    /**
     * <p>Define which Variants of the added Product will be included from the Product Selection.</p>
     * <p>This field is only available for Assignments to a Product Selection of type <a href="ctp:api:type:IndividualProductSelectionType">Individual</a>.
     * The list of SKUs will be updated automatically on any change of those performed on the respective Product itself.</p>
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
     * <p>Defines which Variants of the Product will be excluded from the Product Selection.</p>
     * <p>This field is only available for Assignments to a Product Selection of type <a href="ctp:api:type:IndividualExclusionProductSelectionType">Individual Exclusion</a>.
     * The list of SKUs will be updated automatically on any change of those performed on the respective Product itself.</p>
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
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void
    {
        $this->productSelection = $productSelection;
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
