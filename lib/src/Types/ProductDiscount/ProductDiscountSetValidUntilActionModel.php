<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionModel;

class ProductDiscountSetValidUntilActionModel extends ProductDiscountUpdateActionModel implements ProductDiscountSetValidUntilAction {
    const DISCRIMINATOR_VALUE = 'setValidUntil';

    /**
     * @var \DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            $value = $this->raw(ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validUntil = $value;
        }
        return $this->validUntil;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        if ($validUntil instanceof \DateTime) {
            $validUntil = \DateTimeImmutable::createFromMutable($validUntil);
        }
        if (!$validUntil instanceof \DateTimeImmutable) {
            $validUntil = new \DateTimeImmutable($validUntil);
        }
        $this->$validUntil = $validUntil;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL]) && $data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL] = $data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
