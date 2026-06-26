<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantAttributesChannelAvailability>
 */
final class VariantAttributesChannelAvailabilityBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isOnStock;

    /**

     * @var ?int
     */
    private $availableQuantity;

    /**
     * <p>Indicates whether the Variant is in stock in the specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock()
    {
        return $this->isOnStock;
    }

    /**
     * <p>Number of items of this Variant that are in stock in the specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

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
     * @param ?int $availableQuantity
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }


    public function build(): VariantAttributesChannelAvailability
    {
        return new VariantAttributesChannelAvailabilityModel(
            $this->isOnStock,
            $this->availableQuantity
        );
    }

    public static function of(): VariantAttributesChannelAvailabilityBuilder
    {
        return new self();
    }
}
