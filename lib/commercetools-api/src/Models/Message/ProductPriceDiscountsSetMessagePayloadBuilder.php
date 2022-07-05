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
 * @implements Builder<ProductPriceDiscountsSetMessagePayload>
 */
final class ProductPriceDiscountsSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?ProductPriceDiscountsSetUpdatedPriceCollection
     */
    private $updatedPrices;

    /**

     * @return null|ProductPriceDiscountsSetUpdatedPriceCollection
     */
    public function getUpdatedPrices()
    {
        return $this->updatedPrices;
    }

    /**
     * @param ?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices
     * @return $this
     */
    public function withUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices)
    {
        $this->updatedPrices = $updatedPrices;

        return $this;
    }


    public function build(): ProductPriceDiscountsSetMessagePayload
    {
        return new ProductPriceDiscountsSetMessagePayloadModel(
            $this->updatedPrices
        );
    }

    public static function of(): ProductPriceDiscountsSetMessagePayloadBuilder
    {
        return new self();
    }
}
