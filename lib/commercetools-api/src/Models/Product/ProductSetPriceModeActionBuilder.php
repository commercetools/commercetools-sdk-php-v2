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
 * @implements Builder<ProductSetPriceModeAction>
 */
final class ProductSetPriceModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceMode;

    /**
     * <p>Specifies which type of Prices should be used when looking up a price for the Product.</p>
     *

     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @param ?string $priceMode
     * @return $this
     */
    public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;

        return $this;
    }


    public function build(): ProductSetPriceModeAction
    {
        return new ProductSetPriceModeActionModel(
            $this->priceMode
        );
    }

    public static function of(): ProductSetPriceModeActionBuilder
    {
        return new self();
    }
}
