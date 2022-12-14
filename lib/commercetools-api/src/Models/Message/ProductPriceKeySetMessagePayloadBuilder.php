<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPriceKeySetMessagePayload>
 */
final class ProductPriceKeySetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var ?string
     */
    private $oldKey;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Embedded Price</a>.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductSetPriceKeyAction">Set Price Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldKey()
    {
        return $this->oldKey;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:Price">Embedded Price</a> after the <a href="ctp:api:type:ProductSetPriceKeyAction">Set Price Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
     * @param ?string $priceId
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @param ?string $oldKey
     * @return $this
     */
    public function withOldKey(?string $oldKey)
    {
        $this->oldKey = $oldKey;

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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductPriceKeySetMessagePayload
    {
        return new ProductPriceKeySetMessagePayloadModel(
            $this->variantId,
            $this->priceId,
            $this->oldKey,
            $this->key,
            $this->staged
        );
    }

    public static function of(): ProductPriceKeySetMessagePayloadBuilder
    {
        return new self();
    }
}
