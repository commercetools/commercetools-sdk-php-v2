<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantAttributesVariant>
 */
final class VariantAttributesVariantBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|VariantAttributesAvailability|VariantAttributesAvailabilityBuilder
     */
    private $availability;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>SKU of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Key of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Availability information for this variant.
     * Present only if <a href="ctp:api:type:InventoryEntry">InventoryEntries</a> exist for the variant's SKU.</p>
     *

     * @return null|VariantAttributesAvailability
     */
    public function getAvailability()
    {
        return $this->availability instanceof VariantAttributesAvailabilityBuilder ? $this->availability->build() : $this->availability;
    }

    /**
     * <p>Requested <a href="ctp:api:type:Attribute">Attributes</a> of the Variant.
     * Only Variant-level Attributes that exist on this Variant and were requested via <code>filter[attributes]</code> are included.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?VariantAttributesAvailability $availability
     * @return $this
     */
    public function withAvailability(?VariantAttributesAvailability $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @deprecated use withAvailability() instead
     * @return $this
     */
    public function withAvailabilityBuilder(?VariantAttributesAvailabilityBuilder $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    public function build(): VariantAttributesVariant
    {
        return new VariantAttributesVariantModel(
            $this->id,
            $this->sku,
            $this->key,
            $this->availability instanceof VariantAttributesAvailabilityBuilder ? $this->availability->build() : $this->availability,
            $this->attributes
        );
    }

    public static function of(): VariantAttributesVariantBuilder
    {
        return new self();
    }
}
