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
 * @implements Builder<MissingPricesMeta>
 */
final class MissingPricesMetaBuilder implements Builder
{
    /**
     * @deprecated
     * @var null|MissingPricesProductLevel|MissingPricesProductLevelBuilder
     */
    private $productLevel;

    /**
     * @deprecated
     * @var null|MissingPricesVariantLevel|MissingPricesVariantLevelBuilder
     */
    private $variantLevel;

    /**
     * @deprecated
     * @return null|MissingPricesProductLevel
     */
    public function getProductLevel()
    {
        return $this->productLevel instanceof MissingPricesProductLevelBuilder ? $this->productLevel->build() : $this->productLevel;
    }

    /**
     * @deprecated
     * @return null|MissingPricesVariantLevel
     */
    public function getVariantLevel()
    {
        return $this->variantLevel instanceof MissingPricesVariantLevelBuilder ? $this->variantLevel->build() : $this->variantLevel;
    }

    /**
     * @param ?MissingPricesProductLevel $productLevel
     * @return $this
     */
    public function withProductLevel(?MissingPricesProductLevel $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @param ?MissingPricesVariantLevel $variantLevel
     * @return $this
     */
    public function withVariantLevel(?MissingPricesVariantLevel $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    /**
     * @deprecated use withProductLevel() instead
     * @return $this
     */
    public function withProductLevelBuilder(?MissingPricesProductLevelBuilder $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @deprecated use withVariantLevel() instead
     * @return $this
     */
    public function withVariantLevelBuilder(?MissingPricesVariantLevelBuilder $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    public function build(): MissingPricesMeta
    {
        return new MissingPricesMetaModel(
            $this->productLevel instanceof MissingPricesProductLevelBuilder ? $this->productLevel->build() : $this->productLevel,
            $this->variantLevel instanceof MissingPricesVariantLevelBuilder ? $this->variantLevel->build() : $this->variantLevel
        );
    }

    public static function of(): MissingPricesMetaBuilder
    {
        return new self();
    }
}
