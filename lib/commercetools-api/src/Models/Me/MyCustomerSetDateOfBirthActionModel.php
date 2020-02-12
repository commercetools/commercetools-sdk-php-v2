<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

use DateTimeImmutableModel;
use stdClass;

final class MyCustomerSetDateOfBirthActionModel extends JsonObjectModel implements MyCustomerSetDateOfBirthAction
{
    public const DISCRIMINATOR_VALUE = 'setDateOfBirth';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;


    public function __construct(
        DateTimeImmutable $dateOfBirth = null
    ) {
        $this->dateOfBirth = $dateOfBirth;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH);
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

    public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[MyCustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH]) && $data[MyCustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[MyCustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH] = $data[MyCustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }
}
