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
final class CustomerDateOfBirthSetMessagePayloadModel extends JsonObjectModel implements CustomerDateOfBirthSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerDateOfBirthSet';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $dateOfBirth = null
    ) {
        $this->dateOfBirth = $dateOfBirth;
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

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DATE_OF_BIRTH);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->dateOfBirth = $data;
        }

        return $this->dateOfBirth;
    }


    /**
     * @param ?DateTimeImmutable $dateOfBirth
     */
    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH]) && $data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH] = $data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }
}
