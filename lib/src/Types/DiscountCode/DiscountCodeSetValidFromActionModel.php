<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

class DiscountCodeSetValidFromActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeSetValidFromAction
{
    const DISCRIMINATOR_VALUE = 'setValidFrom';

    /**
     * @var \DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            $value = $this->raw(DiscountCodeSetValidFromAction::FIELD_VALID_FROM);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validFrom = $value;
        }
        return $this->validFrom;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        if ($validFrom instanceof \DateTime) {
            $validFrom = \DateTimeImmutable::createFromMutable($validFrom);
        }
        if (!$validFrom instanceof \DateTimeImmutable) {
            $validFrom = new \DateTimeImmutable($validFrom);
        }
        $this->$validFrom = $validFrom;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[DiscountCodeSetValidFromAction::FIELD_VALID_FROM]) && $data[DiscountCodeSetValidFromAction::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeSetValidFromAction::FIELD_VALID_FROM] = $data[DiscountCodeSetValidFromAction::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
