<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class PaymentChangeTransactionTimestampActionModel extends JsonObjectModel implements PaymentChangeTransactionTimestampAction
{
    public const DISCRIMINATOR_VALUE = 'changeTransactionTimestamp';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $transactionId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $transactionId = null,
        ?DateTimeImmutable $timestamp = null
    ) {
        $this->transactionId = $transactionId;
        $this->timestamp = $timestamp;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRANSACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->transactionId = (string) $data;
        }

        return $this->transactionId;
    }

    /**
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
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @param ?DateTimeImmutable $timestamp
     */
    public function setTimestamp(?DateTimeImmutable $timestamp): void
    {
        $this->timestamp = $timestamp;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP]) && $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP] = $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
