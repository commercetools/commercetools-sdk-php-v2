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
final class VariantAttributesChannelAvailabilityModel extends JsonObjectModel implements VariantAttributesChannelAvailability
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
    protected $availableQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $isOnStock = null,
        ?int $availableQuantity = null
    ) {
        $this->isOnStock = $isOnStock;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * <p>Indicates whether the Variant is in stock in the specified <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * <p>Number of items of this Variant that are in stock in the specified <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void
    {
        $this->isOnStock = $isOnStock;
    }

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }
}
