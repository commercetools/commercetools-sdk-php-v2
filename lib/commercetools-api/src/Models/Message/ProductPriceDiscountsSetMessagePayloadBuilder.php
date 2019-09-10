<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductPriceDiscountsSetMessagePayload>
 */
final class ProductPriceDiscountsSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?ProductPriceDiscountsSetUpdatedPriceCollection
     */
    private $updatedPrices;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|ProductPriceDiscountsSetUpdatedPriceCollection
     */
    public function getUpdatedPrices()
    {
        return $this->updatedPrices;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
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
            $this->type,
            $this->updatedPrices
        );
    }

    public static function of(): ProductPriceDiscountsSetMessagePayloadBuilder
    {
        return new self();
    }
}
