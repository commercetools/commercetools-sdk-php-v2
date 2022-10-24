<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomerSetDateOfBirthActionModel extends JsonObjectModel implements CustomerSetDateOfBirthAction
{
    public const DISCRIMINATOR_VALUE = 'setDateOfBirth';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $dateOfBirth = null,
        ?string $action = null
    ) {
        $this->dateOfBirth = $dateOfBirth;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *
     *
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
        if (isset($data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH]) && $data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH] = $data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object) $data;
    }
}
