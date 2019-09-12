<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Pricemapping;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<PriceMapping>
 */
final class PriceMappingBuilder implements Builder
{
    /**
     * @var ?JsonObject
     */
    private $productVariant;

    /**
     * @var ?string
     */
    private $priceId;

    /**
     * @var ?string
     */
    private $priceKey;

    public function __construct()
    {
    }

    /**
     * <p>the variant where the price is included</p>.
     *
     * @return null|JsonObject
     */
    public function getProductVariant()
    {
        return $this->productVariant;
    }

    /**
     * <p>The ctp-id of the price.</p>.
     *
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>The key of the imported price.</p>.
     *
     * @return null|string
     */
    public function getPriceKey()
    {
        return $this->priceKey;
    }

    /**
     * @return $this
     */
    public function withProductVariant(?JsonObject $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceKey(?string $priceKey)
    {
        $this->priceKey = $priceKey;

        return $this;
    }

    public function build(): PriceMapping
    {
        return new PriceMappingModel(
            $this->productVariant,
            $this->priceId,
            $this->priceKey
        );
    }

    public static function of(): PriceMappingBuilder
    {
        return new self();
    }
}
