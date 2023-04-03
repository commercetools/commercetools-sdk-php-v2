<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\ProductSelection\ProductVariantExclusion;
use Commercetools\Api\Models\ProductSelection\ProductVariantExclusionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionVariantExclusionChangedMessagePayloadModel extends JsonObjectModel implements ProductSelectionVariantExclusionChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductSelectionVariantExclusionChanged';
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
     * @var ?ProductVariantExclusion
     */
    protected $oldVariantExclusion;

    /**
     *
     * @var ?ProductVariantExclusion
     */
    protected $newVariantExclusion;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?ProductVariantExclusion $oldVariantExclusion = null,
        ?ProductVariantExclusion $newVariantExclusion = null,
        ?string $type = null
    ) {
        $this->product = $product;
        $this->oldVariantExclusion = $oldVariantExclusion;
        $this->newVariantExclusion = $newVariantExclusion;
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
     * <p><a href="ctp:api:type:Product">Product</a> for which the Product Variant Exclusion changed.</p>
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
     * <p>Product Variant Exclusion before the <a href="ctp:api:type:ProductSelectionSetVariantExclusionAction">Set Variant Exclusion</a> update action.</p>
     *
     *
     * @return null|ProductVariantExclusion
     */
    public function getOldVariantExclusion()
    {
        if (is_null($this->oldVariantExclusion)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_VARIANT_EXCLUSION);
            if (is_null($data)) {
                return null;
            }

            $this->oldVariantExclusion = ProductVariantExclusionModel::of($data);
        }

        return $this->oldVariantExclusion;
    }

    /**
     * <p>Product Variant Exclusion after the <a href="ctp:api:type:ProductSelectionSetVariantExclusionAction">Set Variant Exclusion</a> update action.</p>
     *
     *
     * @return null|ProductVariantExclusion
     */
    public function getNewVariantExclusion()
    {
        if (is_null($this->newVariantExclusion)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_VARIANT_EXCLUSION);
            if (is_null($data)) {
                return null;
            }

            $this->newVariantExclusion = ProductVariantExclusionModel::of($data);
        }

        return $this->newVariantExclusion;
    }


    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?ProductVariantExclusion $oldVariantExclusion
     */
    public function setOldVariantExclusion(?ProductVariantExclusion $oldVariantExclusion): void
    {
        $this->oldVariantExclusion = $oldVariantExclusion;
    }

    /**
     * @param ?ProductVariantExclusion $newVariantExclusion
     */
    public function setNewVariantExclusion(?ProductVariantExclusion $newVariantExclusion): void
    {
        $this->newVariantExclusion = $newVariantExclusion;
    }
}
