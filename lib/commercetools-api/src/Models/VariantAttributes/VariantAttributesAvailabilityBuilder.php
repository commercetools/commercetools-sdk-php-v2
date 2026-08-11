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
 * @implements Builder<VariantAttributesAvailability>
 */
final class VariantAttributesAvailabilityBuilder implements Builder
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

     * @var null|VariantAttributesChannelAvailabilityMap|VariantAttributesChannelAvailabilityMapBuilder
     */
    private $channels;

    /**
     * <p>Indicates whether the Variant is in stock.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock()
    {
        return $this->isOnStock;
    }

    /**
     * <p>Number of items of this Variant that are in stock.</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * <p>Per-channel availability for the requested supply <a href="ctp:api:type:Channel">Channels</a>.
     * Present only when the <code>filter[supplyChannels]</code> query parameter is provided.</p>
     *

     * @return null|VariantAttributesChannelAvailabilityMap
     */
    public function getChannels()
    {
        return $this->channels instanceof VariantAttributesChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels;
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

    /**
     * @param ?VariantAttributesChannelAvailabilityMap $channels
     * @return $this
     */
    public function withChannels(?VariantAttributesChannelAvailabilityMap $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * @deprecated use withChannels() instead
     * @return $this
     */
    public function withChannelsBuilder(?VariantAttributesChannelAvailabilityMapBuilder $channels)
    {
        $this->channels = $channels;

        return $this;
    }

    public function build(): VariantAttributesAvailability
    {
        return new VariantAttributesAvailabilityModel(
            $this->isOnStock,
            $this->availableQuantity,
            $this->channels instanceof VariantAttributesChannelAvailabilityMapBuilder ? $this->channels->build() : $this->channels
        );
    }

    public static function of(): VariantAttributesAvailabilityBuilder
    {
        return new self();
    }
}
