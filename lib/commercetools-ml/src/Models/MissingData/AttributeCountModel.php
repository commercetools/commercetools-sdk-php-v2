<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeCountModel extends JsonObjectModel implements AttributeCount
{
    /**
     *
     * @var ?int
     */
    protected $productTypeAttributes;

    /**
     *
     * @var ?int
     */
    protected $variantAttributes;

    /**
     *
     * @var ?int
     */
    protected $missingAttributeValues;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $productTypeAttributes = null,
        ?int $variantAttributes = null,
        ?int $missingAttributeValues = null
    ) {
        $this->productTypeAttributes = $productTypeAttributes;
        $this->variantAttributes = $variantAttributes;
        $this->missingAttributeValues = $missingAttributeValues;
    }

    /**
     * <p>Number of attributes defined in the product type.</p>
     *
     *
     * @return null|int
     */
    public function getProductTypeAttributes()
    {
        if (is_null($this->productTypeAttributes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->productTypeAttributes = (int) $data;
        }

        return $this->productTypeAttributes;
    }

    /**
     * <p>Number of attributes defined in the variant.</p>
     *
     *
     * @return null|int
     */
    public function getVariantAttributes()
    {
        if (is_null($this->variantAttributes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->variantAttributes = (int) $data;
        }

        return $this->variantAttributes;
    }

    /**
     * <p>Number of attributes missing values in the variant.</p>
     *
     *
     * @return null|int
     */
    public function getMissingAttributeValues()
    {
        if (is_null($this->missingAttributeValues)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MISSING_ATTRIBUTE_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->missingAttributeValues = (int) $data;
        }

        return $this->missingAttributeValues;
    }


    /**
     * @param ?int $productTypeAttributes
     */
    public function setProductTypeAttributes(?int $productTypeAttributes): void
    {
        $this->productTypeAttributes = $productTypeAttributes;
    }

    /**
     * @param ?int $variantAttributes
     */
    public function setVariantAttributes(?int $variantAttributes): void
    {
        $this->variantAttributes = $variantAttributes;
    }

    /**
     * @param ?int $missingAttributeValues
     */
    public function setMissingAttributeValues(?int $missingAttributeValues): void
    {
        $this->missingAttributeValues = $missingAttributeValues;
    }
}
