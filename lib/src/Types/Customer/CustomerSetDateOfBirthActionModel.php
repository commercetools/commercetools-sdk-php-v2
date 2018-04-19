<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetDateOfBirthActionModel extends CustomerUpdateActionModel implements CustomerSetDateOfBirthAction
{
    const DISCRIMINATOR_VALUE = 'setDateOfBirth';

    /**
     * @var \DateTimeImmutable
     */
    protected $dateOfBirth;

    /**
     * @return \DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        if (is_null($this->dateOfBirth)) {
            $value = $this->raw(CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d', $value);
            $value = $dateTime ? $dateTime : null;

            $this->dateOfBirth = $value;
        }
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $dateOfBirth
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if ($dateOfBirth instanceof \DateTime) {
            $dateOfBirth = \DateTimeImmutable::createFromMutable($dateOfBirth);
        }
        if (!$dateOfBirth instanceof \DateTimeImmutable) {
            $dateOfBirth = new \DateTimeImmutable($dateOfBirth);
        }
        $this->$dateOfBirth = $dateOfBirth;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH]) && $data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH] = $data[CustomerSetDateOfBirthAction::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return $data;
    }
}
