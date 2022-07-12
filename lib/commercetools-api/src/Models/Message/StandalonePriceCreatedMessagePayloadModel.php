<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StandalonePrice\StandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceCreatedMessagePayloadModel extends JsonObjectModel implements StandalonePriceCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceCreated';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?StandalonePrice
     */
    protected $standalonePrice;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StandalonePrice $standalonePrice = null
    ) {
        $this->standalonePrice = $standalonePrice;
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
     * <p>The Standalone Price as it was created.</p>
     *

     * @return null|StandalonePrice
     */
    public function getStandalonePrice()
    {
        if (is_null($this->standalonePrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STANDALONE_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->standalonePrice = StandalonePriceModel::of($data);
        }

        return $this->standalonePrice;
    }


    /**
     * @param ?StandalonePrice $standalonePrice
     */
    public function setStandalonePrice(?StandalonePrice $standalonePrice): void
    {
        $this->standalonePrice = $standalonePrice;
    }
}
