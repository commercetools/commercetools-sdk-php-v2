<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

use Commercetools\Types\Common\Money;

class PaymentSetAuthorizationActionModel extends PaymentUpdateActionModel implements PaymentSetAuthorizationAction {
    const DISCRIMINATOR_VALUE = 'setAuthorization';

    /**
     * @var Money
     */
    protected $amount;
    /**
     * @var \DateTimeImmutable
     */
    protected $until;

    /**
     * @return Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            $value = $this->raw(PaymentSetAuthorizationAction::FIELD_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amount = $value;
        }
        return $this->amount;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getUntil()
    {
        if (is_null($this->until)) {
            $value = $this->raw(PaymentSetAuthorizationAction::FIELD_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->until = $value;
        }
        return $this->until;
    }

    /**
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $until
     * @return $this
     */
    public function setUntil($until)
    {
        if ($until instanceof \DateTime) {
            $until = \DateTimeImmutable::createFromMutable($until);
        }
        if (!$until instanceof \DateTimeImmutable) {
            $until = new \DateTimeImmutable($until);
        }
        $this->$until = $until;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[PaymentSetAuthorizationAction::FIELD_UNTIL]) && $data[PaymentSetAuthorizationAction::FIELD_UNTIL] instanceof \DateTimeImmutable) {
            $data[PaymentSetAuthorizationAction::FIELD_UNTIL] = $data[PaymentSetAuthorizationAction::FIELD_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
