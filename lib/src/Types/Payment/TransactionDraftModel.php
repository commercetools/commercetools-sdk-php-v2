<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Money;

class TransactionDraftModel extends JsonObjectModel implements TransactionDraft
{
    /**
     * @var \DateTimeImmutable
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var Money
     */
    protected $amount;
    /**
     * @var string
     */
    protected $interactionId;
    /**
     * @var string
     */
    protected $state;

    /**
     * @return \DateTimeImmutable
     */
    public function getTimestamp()
    {
        if (is_null($this->timestamp)) {
            $value = $this->raw(TransactionDraft::FIELD_TIMESTAMP);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->timestamp = $value;
        }
        return $this->timestamp;
    }
    /**
     * @return string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(TransactionDraft::FIELD_TYPE);
            $value = (string)$value;
            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            $value = $this->raw(TransactionDraft::FIELD_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->amount = $value;
        }
        return $this->amount;
    }
    /**
     * @return string
     */
    public function getInteractionId()
    {
        if (is_null($this->interactionId)) {
            $value = $this->raw(TransactionDraft::FIELD_INTERACTION_ID);
            $value = (string)$value;
            $this->interactionId = $value;
        }
        return $this->interactionId;
    }
    /**
     * @return string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(TransactionDraft::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        if ($timestamp instanceof \DateTime) {
            $timestamp = \DateTimeImmutable::createFromMutable($timestamp);
        }
        if (!$timestamp instanceof \DateTimeImmutable) {
            $timestamp = new \DateTimeImmutable($timestamp);
        }
        $this->$timestamp = $timestamp;

        return $this;
    }
    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = (string)$type;

        return $this;
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
     * @param string $interactionId
     * @return $this
     */
    public function setInteractionId(string $interactionId)
    {
        $this->interactionId = (string)$interactionId;

        return $this;
    }
    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = (string)$state;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[TransactionDraft::FIELD_TIMESTAMP]) && $data[TransactionDraft::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[TransactionDraft::FIELD_TIMESTAMP] = $data[TransactionDraft::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
