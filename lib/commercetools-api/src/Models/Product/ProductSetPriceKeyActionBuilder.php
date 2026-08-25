<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetPriceKeyAction>
 */
final class ProductSetPriceKeyActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Price">Price</a> to set the key.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>Whether only the staged <a href="ctp:api:type:Price">Embedded Price</a> is updated. If <code>false</code>, both the current and staged Embedded Price are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Value to set. If omitted, any existing value is removed.</p>
     * <p>If the value is used by another Embedded Price on the same ProductVariant, a <a href="ctp:api:type:DuplicatePriceKeyError">DuplicatePriceKey</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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


    public function build(): ProductSetPriceKeyAction
    {
        return new ProductSetPriceKeyActionModel(
            $this->priceId,
            $this->staged,
            $this->key
        );
    }

    public static function of(): ProductSetPriceKeyActionBuilder
    {
        return new self();
    }
}
