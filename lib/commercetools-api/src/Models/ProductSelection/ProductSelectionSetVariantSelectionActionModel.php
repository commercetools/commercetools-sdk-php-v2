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
final class ProductSelectionSetVariantSelectionActionModel extends JsonObjectModel implements ProductSelectionSetVariantSelectionAction
{
    public const DISCRIMINATOR_VALUE = 'setVariantSelection';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ProductResourceIdentifier
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
        ?ProductResourceIdentifier $product = null,
        ?ProductVariantSelection $variantSelection = null,
        ?string $action = null
    ) {
        $this->product = $product;
        $this->variantSelection = $variantSelection;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>ResourceIdentifier of the Product</p>
     *
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
     * <p>Determines which Variants of the previously added Product are to be included in, or excluded from, the Product Selection.
     * Leave it empty to unset an existing Variant Selection.</p>
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
