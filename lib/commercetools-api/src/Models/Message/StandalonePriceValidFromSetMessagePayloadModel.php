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
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceValidFromSetMessagePayloadModel extends JsonObjectModel implements StandalonePriceValidFromSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceValidFromSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $previousValidFrom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $previousValidFrom = null,
        ?string $type = null
    ) {
        $this->validFrom = $validFrom;
        $this->previousValidFrom = $previousValidFrom;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAction">Set Valid From</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAction">Set Valid From</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getPreviousValidFrom()
    {
        if (is_null($this->previousValidFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->previousValidFrom = $data;
        }

        return $this->previousValidFrom;
    }


    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @param ?DateTimeImmutable $previousValidFrom
     */
    public function setPreviousValidFrom(?DateTimeImmutable $previousValidFrom): void
    {
        $this->previousValidFrom = $previousValidFrom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StandalonePriceValidFromSetMessagePayload::FIELD_VALID_FROM]) && $data[StandalonePriceValidFromSetMessagePayload::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[StandalonePriceValidFromSetMessagePayload::FIELD_VALID_FROM] = $data[StandalonePriceValidFromSetMessagePayload::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[StandalonePriceValidFromSetMessagePayload::FIELD_PREVIOUS_VALID_FROM]) && $data[StandalonePriceValidFromSetMessagePayload::FIELD_PREVIOUS_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[StandalonePriceValidFromSetMessagePayload::FIELD_PREVIOUS_VALID_FROM] = $data[StandalonePriceValidFromSetMessagePayload::FIELD_PREVIOUS_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
