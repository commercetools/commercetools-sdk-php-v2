<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class TransactionDraftModel extends JsonObjectModel implements TransactionDraft
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Money
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
        DateTimeImmutable $timestamp = null,
        string $type = null,
        Money $amount = null,
        string $interactionId = null,
        string $state = null
    ) {
        $this->timestamp = $timestamp;
        $this->type = $type;
        $this->amount = $amount;
        $this->interactionId = $interactionId;
        $this->state = $state;
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
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = MoneyModel::of($data);
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
     * <p>The state of this transaction.
     * If not set, defaults to <code>Initial</code>.</p>
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


    public function setTimestamp(?DateTimeImmutable $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setAmount(?Money $amount): void
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
        if (isset($data[TransactionDraft::FIELD_TIMESTAMP]) && $data[TransactionDraft::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[TransactionDraft::FIELD_TIMESTAMP] = $data[TransactionDraft::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
