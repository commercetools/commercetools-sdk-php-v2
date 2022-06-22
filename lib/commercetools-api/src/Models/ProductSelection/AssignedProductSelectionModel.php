<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssignedProductSelectionModel extends JsonObjectModel implements AssignedProductSelection
{
    /**
     * @var ?ProductSelectionReference
     */
    protected $productSelection;

    /**
     * @var ?ProductVariantSelection
     */
    protected $variantSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSelectionReference $productSelection = null,
        ?ProductVariantSelection $variantSelection = null
    ) {
        $this->productSelection = $productSelection;
        $this->variantSelection = $variantSelection;
    }

    /**
     * <p>Reference to the Product Selection that this assignment is part of.</p>
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
     * <p>Selects which Variants of the newly added Product will be included, or excluded, from the Product Selection.</p>
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
}
