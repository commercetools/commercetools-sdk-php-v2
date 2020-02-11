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
 * @implements Builder<ProductRemovePriceAction>
 */
final class ProductRemovePriceActionBuilder implements Builder
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
     * <p>ID of the <a href="#price">Price</a></p>
     *
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductRemovePriceAction
    {
        return new ProductRemovePriceActionModel(
            $this->priceId,
            $this->staged
        );
    }

    public static function of(): ProductRemovePriceActionBuilder
    {
        return new self();
    }
}
