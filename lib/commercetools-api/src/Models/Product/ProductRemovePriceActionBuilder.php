<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRemovePriceAction>
 */
final class ProductRemovePriceActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?string
     */
    private $priceId;

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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

    public function build(): ProductRemovePriceAction
    {
        return new ProductRemovePriceActionModel(
            $this->staged,
            $this->priceId
        );
    }

    public static function of(): ProductRemovePriceActionBuilder
    {
        return new self();
    }
}
