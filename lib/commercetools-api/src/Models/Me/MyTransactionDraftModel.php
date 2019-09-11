<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class MyTransactionDraftModel extends JsonObjectModel implements MyTransactionDraft
{
    /**
     * @var ?string
     */
    protected $interactionId;

    /**
     * @var ?Money
     */
    protected $amount;

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
        Money $amount = null,
        string $type = null,
        DateTimeImmutable $timestamp = null
    ) {
        $this->interactionId = $interactionId;
        $this->amount = $amount;
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
            $data = $this->raw(MyTransactionDraft::FIELD_INTERACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->interactionId = (string) $data;
        }

        return $this->interactionId;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyTransactionDraft::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = MoneyModel::of($data);
        }

        return $this->amount;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyTransactionDraft::FIELD_TYPE);
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
            $data = $this->raw(MyTransactionDraft::FIELD_TIMESTAMP);
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

    public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }

    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
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
        if (isset($data[MyTransactionDraft::FIELD_TIMESTAMP]) && $data[MyTransactionDraft::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[MyTransactionDraft::FIELD_TIMESTAMP] = $data[MyTransactionDraft::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
