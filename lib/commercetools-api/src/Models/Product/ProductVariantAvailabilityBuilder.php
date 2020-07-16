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
 * @implements Builder<ProductVariantAvailability>
 */
final class ProductVariantAvailabilityBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $isOnStock;

    /**
     * @var ?int
     */
    private $restockableInDays;

    /**
     * @var ?int
     */
    private $availableQuantity;

    /**
     * @var null|ProductVariantChannelAvailabilityMap|ProductVariantChannelAvailabilityMapBuilder
     */
    private $channels;

    /**
     * @return null|bool
     */
    public function getIsOnStock()
    {
        return $this->isOnStock;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @return null|ProductVariantChannelAvailabilityMap
     */
    public function getChannels()
    {
        return $this->channels instanceof ProductVariantChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels;
    }

    /**
     * @param ?bool $isOnStock
     * @return $this
     */
    public function withIsOnStock(?bool $isOnStock)
    {
        $this->isOnStock = $isOnStock;

        return $this;
    }

    /**
     * @param ?int $restockableInDays
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    /**
     * @param ?int $availableQuantity
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * @param ?ProductVariantChannelAvailabilityMap $channels
     * @return $this
     */
    public function withChannels(?ProductVariantChannelAvailabilityMap $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelsBuilder(?ProductVariantChannelAvailabilityMapBuilder $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    public function build(): ProductVariantAvailability
    {
        return new ProductVariantAvailabilityModel(
            $this->isOnStock,
            $this->restockableInDays,
            $this->availableQuantity,
            $this->channels instanceof ProductVariantChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels
        );
    }

    public static function of(): ProductVariantAvailabilityBuilder
    {
        return new self();
    }
}
