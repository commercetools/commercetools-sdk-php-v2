<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
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

    /**
     * @var ?CustomFields
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?DateTimeImmutable $timestamp = null,
        ?string $type = null,
        ?TypedMoney $amount = null,
        ?string $interactionId = null,
        ?string $state = null,
        ?CustomFields $custom = null
    ) {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->type = $type;
        $this->amount = $amount;
        $this->interactionId = $interactionId;
        $this->state = $state;
        $this->custom = $custom;
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
            $data = $this->raw(self::FIELD_ID);
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
            $data = $this->raw(self::FIELD_TIMESTAMP);
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
            $data = $this->raw(self::FIELD_TYPE);
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
            $data = $this->raw(self::FIELD_AMOUNT);
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
            $data = $this->raw(self::FIELD_INTERACTION_ID);
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
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>Custom Fields for the Transaction.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?DateTimeImmutable $timestamp
     */
    public function setTimestamp(?DateTimeImmutable $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?TypedMoney $amount
     */
    public function setAmount(?TypedMoney $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Transaction::FIELD_TIMESTAMP]) && $data[Transaction::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[Transaction::FIELD_TIMESTAMP] = $data[Transaction::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
