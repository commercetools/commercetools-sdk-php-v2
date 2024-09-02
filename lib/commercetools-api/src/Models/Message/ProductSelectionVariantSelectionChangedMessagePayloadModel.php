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
final class ProductSelectionVariantSelectionChangedMessagePayloadModel extends JsonObjectModel implements ProductSelectionVariantSelectionChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductSelectionVariantSelectionChanged';
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
    protected $oldVariantSelection;

    /**
     *
     * @var ?ProductVariantSelection
     */
    protected $newVariantSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?ProductVariantSelection $oldVariantSelection = null,
        ?ProductVariantSelection $newVariantSelection = null,
        ?string $type = null
    ) {
        $this->product = $product;
        $this->oldVariantSelection = $oldVariantSelection;
        $this->newVariantSelection = $newVariantSelection;
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
     * <p><a href="ctp:api:type:Product">Product</a> for which the Product Variant Selection changed.</p>
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
     * <p>Product Variant Selection before the <a href="ctp:api:type:ProductSelectionSetVariantSelectionAction">Set Variant Selection</a> update action.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getOldVariantSelection()
    {
        if (is_null($this->oldVariantSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_VARIANT_SELECTION);
            if (is_null($data)) {
                return null;
            }
            $className = ProductVariantSelectionModel::resolveDiscriminatorClass($data);
            $this->oldVariantSelection = $className::of($data);
        }

        return $this->oldVariantSelection;
    }

    /**
     * <p>Product Variant Selection after the <a href="ctp:api:type:ProductSelectionSetVariantSelectionAction">Set Variant Selection</a> update action.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getNewVariantSelection()
    {
        if (is_null($this->newVariantSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_VARIANT_SELECTION);
            if (is_null($data)) {
                return null;
            }
            $className = ProductVariantSelectionModel::resolveDiscriminatorClass($data);
            $this->newVariantSelection = $className::of($data);
        }

        return $this->newVariantSelection;
    }


    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?ProductVariantSelection $oldVariantSelection
     */
    public function setOldVariantSelection(?ProductVariantSelection $oldVariantSelection): void
    {
        $this->oldVariantSelection = $oldVariantSelection;
    }

    /**
     * @param ?ProductVariantSelection $newVariantSelection
     */
    public function setNewVariantSelection(?ProductVariantSelection $newVariantSelection): void
    {
        $this->newVariantSelection = $newVariantSelection;
    }
}
