<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductPriceDiscountsSetMessagePayloadModel extends JsonObjectModel implements ProductPriceDiscountsSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductPriceDiscountsSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductPriceDiscountsSetUpdatedPriceCollection
     */
    protected $updatedPrices;


    public function __construct(
        ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices = null
    ) {
        $this->updatedPrices = $updatedPrices;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|ProductPriceDiscountsSetUpdatedPriceCollection
     */
    public function getUpdatedPrices()
    {
        if (is_null($this->updatedPrices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_UPDATED_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->updatedPrices = ProductPriceDiscountsSetUpdatedPriceCollection::fromArray($data);
        }

        return $this->updatedPrices;
    }


    public function setUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices): void
    {
        $this->updatedPrices = $updatedPrices;
    }
}
