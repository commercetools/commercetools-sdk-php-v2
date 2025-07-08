<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionAssignmentModel extends JsonObjectModel implements ProductSelectionAssignment
{
    /**
     *
     * @var ?ProductKeyReference
     */
    protected $product;

    /**
     *
     * @var ?VariantSelection
     */
    protected $variantSelection;

    /**
     *
     * @var ?VariantExclusion
     */
    protected $variantExclusion;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductKeyReference $product = null,
        ?VariantSelection $variantSelection = null,
        ?VariantExclusion $variantExclusion = null
    ) {
        $this->product = $product;
        $this->variantSelection = $variantSelection;
        $this->variantExclusion = $variantExclusion;
    }

    /**
     * <p>Reference to the Product by key.</p>
     *
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Variant selection specifying included SKUs.</p>
     *
     *
     * @return null|VariantSelection
     */
    public function getVariantSelection()
    {
        if (is_null($this->variantSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->variantSelection = VariantSelectionModel::of($data);
        }

        return $this->variantSelection;
    }

    /**
     * <p>Variant exclusion specifying excluded SKUs.</p>
     *
     *
     * @return null|VariantExclusion
     */
    public function getVariantExclusion()
    {
        if (is_null($this->variantExclusion)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_EXCLUSION);
            if (is_null($data)) {
                return null;
            }

            $this->variantExclusion = VariantExclusionModel::of($data);
        }

        return $this->variantExclusion;
    }


    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?VariantSelection $variantSelection
     */
    public function setVariantSelection(?VariantSelection $variantSelection): void
    {
        $this->variantSelection = $variantSelection;
    }

    /**
     * @param ?VariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?VariantExclusion $variantExclusion): void
    {
        $this->variantExclusion = $variantExclusion;
    }
}
