<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MissingAttributesMeta>
 */
final class MissingAttributesMetaBuilder implements Builder
{
    /**
     * @var null|MissingAttributesDetails|MissingAttributesDetailsBuilder
     */
    private $productLevel;

    /**
     * @var null|MissingAttributesDetails|MissingAttributesDetailsBuilder
     */
    private $variantLevel;

    /**
     * @var ?array
     */
    private $productTypeIds;

    /**
     * @return null|MissingAttributesDetails
     */
    public function getProductLevel()
    {
        return $this->productLevel instanceof MissingAttributesDetailsBuilder ? $this->productLevel->build() : $this->productLevel;
    }

    /**
     * @return null|MissingAttributesDetails
     */
    public function getVariantLevel()
    {
        return $this->variantLevel instanceof MissingAttributesDetailsBuilder ? $this->variantLevel->build() : $this->variantLevel;
    }

    /**
     * <p>The IDs of the product types containing the requested <code>attributeName</code>.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        return $this->productTypeIds;
    }

    /**
     * @param ?MissingAttributesDetails $productLevel
     * @return $this
     */
    public function withProductLevel(?MissingAttributesDetails $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @param ?MissingAttributesDetails $variantLevel
     * @return $this
     */
    public function withVariantLevel(?MissingAttributesDetails $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    /**
     * @param ?array $productTypeIds
     * @return $this
     */
    public function withProductTypeIds(?array $productTypeIds)
    {
        $this->productTypeIds = $productTypeIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductLevelBuilder(?MissingAttributesDetailsBuilder $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantLevelBuilder(?MissingAttributesDetailsBuilder $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    public function build(): MissingAttributesMeta
    {
        return new MissingAttributesMetaModel(
            $this->productLevel instanceof MissingAttributesDetailsBuilder ? $this->productLevel->build() : $this->productLevel,
            $this->variantLevel instanceof MissingAttributesDetailsBuilder ? $this->variantLevel->build() : $this->variantLevel,
            $this->productTypeIds
        );
    }

    public static function of(): MissingAttributesMetaBuilder
    {
        return new self();
    }
}
