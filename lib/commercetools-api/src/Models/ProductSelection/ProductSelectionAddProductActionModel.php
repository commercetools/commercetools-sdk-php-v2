<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionAddProductActionModel extends JsonObjectModel implements ProductSelectionAddProductAction
{
    public const DISCRIMINATOR_VALUE = 'addProduct';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ProductResourceIdentifier
     */
    protected $product;

    /**
     * @var ?ProductVariantSelection
     */
    protected $variantSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductResourceIdentifier $product = null,
        ?ProductVariantSelection $variantSelection = null
    ) {
        $this->product = $product;
        $this->variantSelection = $variantSelection;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>ResourceIdentifier to Product</p>
     *
     * @return null|ProductResourceIdentifier
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductResourceIdentifierModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Selects which Variants of the newly added Product will be included, or excluded, from the Product Selection.
     * If not supplied all Variants are deemed to be included.</p>
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
            $className = ProductVariantSelectionModel::resolveDiscriminatorClass($data);
            $this->variantSelection = $className::of($data);
        }

        return $this->variantSelection;
    }


    /**
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void
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
