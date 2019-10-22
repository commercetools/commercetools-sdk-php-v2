<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class TransactionModel extends JsonObjectModel implements Transaction
{
    /**
     * @var ?string
     */
    protected $interactionId;

    /**
     * @var ?TypedMoney
     */
    protected $amount;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;

    public function __construct(
        string $interactionId = null,
        TypedMoney $amount = null,
        string $state = null,
        string $id = null,
        string $type = null,
        DateTimeImmutable $timestamp = null
    ) {
        $this->interactionId = $interactionId;
        $this->amount = $amount;
        $this->state = $state;
        $this->id = $id;
        $this->type = $type;
        $this->timestamp = $timestamp;
    }

    /**
     * @return null|string
     */
    public function getInteractionId()
    {
        if (is_null($this->interactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Transaction::FIELD_INTERACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->interactionId = (string) $data;
        }

        return $this->interactionId;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Transaction::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->amount = $className::of($data);
        }

        return $this->amount;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Transaction::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Transaction::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Transaction::FIELD_TYPE);
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
    public function getTimestamp()
    {
        if (is_null($this->timestamp)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Transaction::FIELD_TIMESTAMP);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->timestamp = $data;
        }

        return $this->timestamp;
    }

    public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }

    public function setAmount(?TypedMoney $amount): void
    {
        $this->amount = $amount;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setTimestamp(?DateTimeImmutable $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Transaction::FIELD_TIMESTAMP]) && $data[Transaction::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[Transaction::FIELD_TIMESTAMP] = $data[Transaction::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
