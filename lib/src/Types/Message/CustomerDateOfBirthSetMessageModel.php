<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class CustomerDateOfBirthSetMessageModel extends MessageModel implements CustomerDateOfBirthSetMessage
{
    const DISCRIMINATOR_VALUE = 'CustomerDateOfBirthSet';

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
            $value = $this->raw(CustomerDateOfBirthSetMessage::FIELD_DATE_OF_BIRTH);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
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
        if (isset($data[CustomerDateOfBirthSetMessage::FIELD_DATE_OF_BIRTH]) && $data[CustomerDateOfBirthSetMessage::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
            $data[CustomerDateOfBirthSetMessage::FIELD_DATE_OF_BIRTH] = $data[CustomerDateOfBirthSetMessage::FIELD_DATE_OF_BIRTH]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
