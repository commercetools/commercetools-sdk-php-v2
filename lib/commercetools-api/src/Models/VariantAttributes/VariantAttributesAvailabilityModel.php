<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantAttributesAvailabilityModel extends JsonObjectModel implements VariantAttributesAvailability
{
    /**
     *
     * @var ?bool
     */
    protected $isOnStock;

    /**
     *
     * @var ?int
     */
    protected $restockableInDays;

    /**
     *
     * @var ?int
     */
    protected $availableQuantity;

    /**
     *
     * @var ?VariantAttributesChannelAvailabilityMap
     */
    protected $channels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $isOnStock = null,
        ?int $restockableInDays = null,
        ?int $availableQuantity = null,
        ?VariantAttributesChannelAvailabilityMap $channels = null
    ) {
        $this->isOnStock = $isOnStock;
        $this->restockableInDays = $restockableInDays;
        $this->availableQuantity = $availableQuantity;
        $this->channels = $channels;
    }

    /**
     * <p>Whether the Variant is in stock.</p>
     *
     *
     * @return null|bool
     */
    public function getIsOnStock()
    {
        if (is_null($this->isOnStock)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->isOnStock = (bool) $data;
        }

        return $this->isOnStock;
    }

    /**
     * <p>Number of days to restock the Variant once it is out of stock.</p>
     *
     *
     * @return null|int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESTOCKABLE_IN_DAYS);
            if (is_null($data)) {
                return null;
            }
            $this->restockableInDays = (int) $data;
        }

        return $this->restockableInDays;
    }

    /**
     * <p>Number of items of this Variant that are in stock.</p>
     *
     *
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        if (is_null($this->availableQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_AVAILABLE_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->availableQuantity = (int) $data;
        }

        return $this->availableQuantity;
    }

    /**
     * <p>Per-channel availability for the requested supply <a href="ctp:api:type:Channel">Channels</a>.
     * Present only when the <code>filter[supplyChannels]</code> query parameter is provided.</p>
     *
     *
     * @return null|VariantAttributesChannelAvailabilityMap
     */
    public function getChannels()
    {
        if (is_null($this->channels)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNELS);
            if (is_null($data)) {
                return null;
            }

            $this->channels = VariantAttributesChannelAvailabilityMapModel::of($data);
        }

        return $this->channels;
    }


    /**
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void
    {
        $this->isOnStock = $isOnStock;
    }

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * @param ?VariantAttributesChannelAvailabilityMap $channels
     */
    public function setChannels(?VariantAttributesChannelAvailabilityMap $channels): void
    {
        $this->channels = $channels;
    }
}
