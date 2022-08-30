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
final class StagedQuoteValidToSetMessagePayloadModel extends JsonObjectModel implements StagedQuoteValidToSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StagedQuoteValidToSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validTo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $validTo = null,
        ?string $type = null
    ) {
        $this->validTo = $validTo;
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
     * <p>Expiration date for the Staged Quote after the <a href="ctp:api:type:StagedQuoteSetValidToAction">Set Valid To</a> update action.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        if (is_null($this->validTo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_TO);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validTo = $data;
        }

        return $this->validTo;
    }


    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void
    {
        $this->validTo = $validTo;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StagedQuoteValidToSetMessagePayload::FIELD_VALID_TO]) && $data[StagedQuoteValidToSetMessagePayload::FIELD_VALID_TO] instanceof \DateTimeImmutable) {
            $data[StagedQuoteValidToSetMessagePayload::FIELD_VALID_TO] = $data[StagedQuoteValidToSetMessagePayload::FIELD_VALID_TO]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
