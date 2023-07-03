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
final class StandalonePriceValidUntilSetMessagePayloadModel extends JsonObjectModel implements StandalonePriceValidUntilSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceValidUntilSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $previousValidUntil;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $validUntil = null,
        ?DateTimeImmutable $previousValidUntil = null,
        ?string $type = null
    ) {
        $this->validUntil = $validUntil;
        $this->previousValidUntil = $previousValidUntil;
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
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> after the <a href="ctp:api:type:StandalonePriceSetValidUntilAction">Set Valid Until</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> before the <a href="ctp:api:type:StandalonePriceSetValidUntilAction">Set Valid Until</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getPreviousValidUntil()
    {
        if (is_null($this->previousValidUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->previousValidUntil = $data;
        }

        return $this->previousValidUntil;
    }


    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @param ?DateTimeImmutable $previousValidUntil
     */
    public function setPreviousValidUntil(?DateTimeImmutable $previousValidUntil): void
    {
        $this->previousValidUntil = $previousValidUntil;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StandalonePriceValidUntilSetMessagePayload::FIELD_VALID_UNTIL]) && $data[StandalonePriceValidUntilSetMessagePayload::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[StandalonePriceValidUntilSetMessagePayload::FIELD_VALID_UNTIL] = $data[StandalonePriceValidUntilSetMessagePayload::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[StandalonePriceValidUntilSetMessagePayload::FIELD_PREVIOUS_VALID_UNTIL]) && $data[StandalonePriceValidUntilSetMessagePayload::FIELD_PREVIOUS_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[StandalonePriceValidUntilSetMessagePayload::FIELD_PREVIOUS_VALID_UNTIL] = $data[StandalonePriceValidUntilSetMessagePayload::FIELD_PREVIOUS_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
