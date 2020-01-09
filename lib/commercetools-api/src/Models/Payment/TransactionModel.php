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
    protected $id;

    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?TypedMoney
     */
    protected $amount;

    /**
     * @var ?string
     */
    protected $interactionId;

    /**
     * @var ?string
     */
    protected $state;

    public function __construct(
        string $id = null,
        DateTimeImmutable $timestamp = null,
        string $type = null,
        TypedMoney $amount = null,
        string $interactionId = null,
        string $state = null
    ) {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->type = $type;
        $this->amount = $amount;
        $this->interactionId = $interactionId;
        $this->state = $state;
    }

    /**
     * <p>The unique ID of this object.</p>
     *
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
     * <p>The time at which the transaction took place.</p>
     *
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
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->timestamp = $data;
        }

        return $this->timestamp;
    }

    /**
     * <p>The type of this transaction.</p>
     *
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
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP).
     * If a matching interaction was logged in the <code>interfaceInteractions</code> array, the corresponding interaction should be findable with this ID.</p>
     *
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
     * <p>The state of this transaction.</p>
     *
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

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setTimestamp(?DateTimeImmutable $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setAmount(?TypedMoney $amount): void
    {
        $this->amount = $amount;
    }

    public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
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
