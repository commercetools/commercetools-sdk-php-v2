<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariantChannelAvailability>
 */
final class ProductVariantChannelAvailabilityBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $availableQuantity;

    /**
     * @var ?int
     */
    private $restockableInDays;

    /**
     * @var ?bool
     */
    private $isOnStock;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @return null|bool
     */
    public function getIsOnStock()
    {
        return $this->isOnStock;
    }

    /**
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsOnStock(?bool $isOnStock)
    {
        $this->isOnStock = $isOnStock;

        return $this;
    }

    public function build(): ProductVariantChannelAvailability
    {
        return new ProductVariantChannelAvailabilityModel(
            $this->availableQuantity,
            $this->restockableInDays,
            $this->isOnStock
        );
    }

    public static function of(): ProductVariantChannelAvailabilityBuilder
    {
        return new self();
    }
}
