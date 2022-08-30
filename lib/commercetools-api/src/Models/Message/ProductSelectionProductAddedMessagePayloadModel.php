<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelection;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelectionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionProductAddedMessagePayloadModel extends JsonObjectModel implements ProductSelectionProductAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductSelectionProductAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?ProductVariantSelection $variantSelection = null,
        ?string $type = null
    ) {
        $this->product = $product;
        $this->variantSelection = $variantSelection;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Product">Product</a> that was added to the <a href="ctp:api:type:ProductSelection">Product Selection</a>.</p>
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
     * <p>Product Variant Selection after the <a href="ctp:api:type:ProductSelectionAddProductAction">Add Product</a> update action.</p>
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
}
