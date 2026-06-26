<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantAttributesVariantModel extends JsonObjectModel implements VariantAttributesVariant
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?VariantAttributesAvailability
     */
    protected $availability;

    /**
     *
     * @var ?AttributeCollection
     */
    protected $attributes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $sku = null,
        ?string $key = null,
        ?VariantAttributesAvailability $availability = null,
        ?AttributeCollection $attributes = null
    ) {
        $this->id = $id;
        $this->sku = $sku;
        $this->key = $key;
        $this->availability = $availability;
        $this->attributes = $attributes;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>SKU of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>Key of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Availability information for this variant.
     * Present only if <a href="ctp:api:type:InventoryEntry">InventoryEntries</a> exist for the variant's SKU.</p>
     *
     *
     * @return null|VariantAttributesAvailability
     */
    public function getAvailability()
    {
        if (is_null($this->availability)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AVAILABILITY);
            if (is_null($data)) {
                return null;
            }

            $this->availability = VariantAttributesAvailabilityModel::of($data);
        }

        return $this->availability;
    }

    /**
     * <p>Requested <a href="ctp:api:type:Attribute">Attributes</a> of the Variant.
     * Only Variant-level Attributes that exist on this Variant and were requested via <code>filter[attributes]</code> are included.</p>
     *
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?VariantAttributesAvailability $availability
     */
    public function setAvailability(?VariantAttributesAvailability $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
