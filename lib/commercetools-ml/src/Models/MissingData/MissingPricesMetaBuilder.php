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
     * @var null|MissingPricesProductLevel|MissingPricesProductLevelBuilder
     */
    private $productLevel;

    /**
     * @var null|MissingPricesVariantLevel|MissingPricesVariantLevelBuilder
     */
    private $variantLevel;

    /**
     * @return null|MissingPricesProductLevel
     */
    public function getProductLevel()
    {
        return $this->productLevel instanceof MissingPricesProductLevelBuilder ? $this->productLevel->build() : $this->productLevel;
    }

    /**
     * @return null|MissingPricesVariantLevel
     */
    public function getVariantLevel()
    {
        return $this->variantLevel instanceof MissingPricesVariantLevelBuilder ? $this->variantLevel->build() : $this->variantLevel;
    }

    /**
     * @return $this
     */
    public function withProductLevel(?MissingPricesProductLevel $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantLevel(?MissingPricesVariantLevel $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductLevelBuilder(?MissingPricesProductLevelBuilder $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
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
