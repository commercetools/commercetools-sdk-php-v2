<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantChannelAvailability>
 */
final class ProductVariantChannelAvailabilityBuilder implements Builder
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


    public function build(): ProductVariantChannelAvailability
    {
        return new ProductVariantChannelAvailabilityModel(
            $this->isOnStock,
            $this->restockableInDays,
            $this->availableQuantity
        );
    }

    public static function of(): ProductVariantChannelAvailabilityBuilder
    {
        return new self();
    }
}
