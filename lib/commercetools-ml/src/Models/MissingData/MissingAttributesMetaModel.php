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
final class MissingAttributesMetaModel extends JsonObjectModel implements MissingAttributesMeta
{
    /**
     * @deprecated
     * @var ?MissingAttributesDetails
     */
    protected $productLevel;

    /**
     * @deprecated
     * @var ?MissingAttributesDetails
     */
    protected $variantLevel;

    /**
     *
     * @var ?array
     */
    protected $productTypeIds;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MissingAttributesDetails $productLevel = null,
        ?MissingAttributesDetails $variantLevel = null,
        ?array $productTypeIds = null
    ) {
        $this->productLevel = $productLevel;
        $this->variantLevel = $variantLevel;
        $this->productTypeIds = $productTypeIds;
    }

    /**
     * @deprecated
     * @return null|MissingAttributesDetails
     */
    public function getProductLevel()
    {
        if (is_null($this->productLevel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_LEVEL);
            if (is_null($data)) {
                return null;
            }

            $this->productLevel = MissingAttributesDetailsModel::of($data);
        }

        return $this->productLevel;
    }

    /**
     * @deprecated
     * @return null|MissingAttributesDetails
     */
    public function getVariantLevel()
    {
        if (is_null($this->variantLevel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_LEVEL);
            if (is_null($data)) {
                return null;
            }

            $this->variantLevel = MissingAttributesDetailsModel::of($data);
        }

        return $this->variantLevel;
    }

    /**
     * <p>The IDs of the product types containing the requested <code>attributeName</code>.</p>
     *
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        if (is_null($this->productTypeIds)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE_IDS);
            if (is_null($data)) {
                return null;
            }
            $this->productTypeIds = $data;
        }

        return $this->productTypeIds;
    }


    /**
     * @param ?MissingAttributesDetails $productLevel
     */
    public function setProductLevel(?MissingAttributesDetails $productLevel): void
    {
        $this->productLevel = $productLevel;
    }

    /**
     * @param ?MissingAttributesDetails $variantLevel
     */
    public function setVariantLevel(?MissingAttributesDetails $variantLevel): void
    {
        $this->variantLevel = $variantLevel;
    }

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void
    {
        $this->productTypeIds = $productTypeIds;
    }
}
