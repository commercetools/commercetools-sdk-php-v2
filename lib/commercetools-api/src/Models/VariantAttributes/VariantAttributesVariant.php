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

interface VariantAttributesVariant extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_AVAILABILITY = 'availability';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>SKU of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Key of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Availability information for this variant.
     * Present only if <a href="ctp:api:type:InventoryEntry">InventoryEntries</a> exist for the variant's SKU.</p>
     *

     * @return null|VariantAttributesAvailability
     */
    public function getAvailability();

    /**
     * <p>Requested <a href="ctp:api:type:Attribute">Attributes</a> of the Variant.
     * Only Variant-level Attributes that exist on this Variant and were requested via <code>filter[attributes]</code> are included.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?VariantAttributesAvailability $availability
     */
    public function setAvailability(?VariantAttributesAvailability $availability): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
