<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPricesSetMessagePayload>
 */
final class ProductPricesSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?PriceCollection
     */
    private $prices;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was set.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The <a href="ctp:api:type:Price">Embedded Prices</a> that were set on the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|PriceCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?PriceCollection $prices
     * @return $this
     */
    public function withPrices(?PriceCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductPricesSetMessagePayload
    {
        return new ProductPricesSetMessagePayloadModel(
            $this->variantId,
            $this->prices,
            $this->staged
        );
    }

    public static function of(): ProductPricesSetMessagePayloadBuilder
    {
        return new self();
    }
}
