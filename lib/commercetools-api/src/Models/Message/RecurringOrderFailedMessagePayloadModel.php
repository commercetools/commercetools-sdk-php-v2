<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Error\RecurringOrderFailureErrorCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderFailedMessagePayloadModel extends JsonObjectModel implements RecurringOrderFailedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderFailed';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $cartId;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $failedAt;

    /**
     *
     * @var ?string
     */
    protected $failureReason;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $orderScheduledAt;

    /**
     *
     * @var ?RecurringOrderFailureErrorCollection
     */
    protected $errors;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $cartId = null,
        ?DateTimeImmutable $failedAt = null,
        ?string $failureReason = null,
        ?DateTimeImmutable $orderScheduledAt = null,
        ?RecurringOrderFailureErrorCollection $errors = null,
        ?string $type = null
    ) {
        $this->cartId = $cartId;
        $this->failedAt = $failedAt;
        $this->failureReason = $failureReason;
        $this->orderScheduledAt = $orderScheduledAt;
        $this->errors = $errors;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>ID of the <a href="ctp:api:type:Cart">Cart</a> used in the failed Order creation attempt.</p>
     *
     *
     * @return null|string
     */
    public function getCartId()
    {
        if (is_null($this->cartId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CART_ID);
            if (is_null($data)) {
                return null;
            }
            $this->cartId = (string) $data;
        }

        return $this->cartId;
    }

    /**
     * <p>Date and time (UTC) when the Order creation attempt failed.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getFailedAt()
    {
        if (is_null($this->failedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FAILED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->failedAt = $data;
        }

        return $this->failedAt;
    }

    /**
     * <p>Description of why the Order creation failed, such as insufficient stock.</p>
     *
     *
     * @return null|string
     */
    public function getFailureReason()
    {
        if (is_null($this->failureReason)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FAILURE_REASON);
            if (is_null($data)) {
                return null;
            }
            $this->failureReason = (string) $data;
        }

        return $this->failureReason;
    }

    /**
     * <p>Date and time (UTC) the Order was scheduled to be created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getOrderScheduledAt()
    {
        if (is_null($this->orderScheduledAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_SCHEDULED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->orderScheduledAt = $data;
        }

        return $this->orderScheduledAt;
    }

    /**
     * <p>Errors due to which the Order creation failed.</p>
     *
     *
     * @return null|RecurringOrderFailureErrorCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = RecurringOrderFailureErrorCollection::fromArray($data);
        }

        return $this->errors;
    }


    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void
    {
        $this->cartId = $cartId;
    }

    /**
     * @param ?DateTimeImmutable $failedAt
     */
    public function setFailedAt(?DateTimeImmutable $failedAt): void
    {
        $this->failedAt = $failedAt;
    }

    /**
     * @param ?string $failureReason
     */
    public function setFailureReason(?string $failureReason): void
    {
        $this->failureReason = $failureReason;
    }

    /**
     * @param ?DateTimeImmutable $orderScheduledAt
     */
    public function setOrderScheduledAt(?DateTimeImmutable $orderScheduledAt): void
    {
        $this->orderScheduledAt = $orderScheduledAt;
    }

    /**
     * @param ?RecurringOrderFailureErrorCollection $errors
     */
    public function setErrors(?RecurringOrderFailureErrorCollection $errors): void
    {
        $this->errors = $errors;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderFailedMessagePayload::FIELD_FAILED_AT]) && $data[RecurringOrderFailedMessagePayload::FIELD_FAILED_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderFailedMessagePayload::FIELD_FAILED_AT] = $data[RecurringOrderFailedMessagePayload::FIELD_FAILED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[RecurringOrderFailedMessagePayload::FIELD_ORDER_SCHEDULED_AT]) && $data[RecurringOrderFailedMessagePayload::FIELD_ORDER_SCHEDULED_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderFailedMessagePayload::FIELD_ORDER_SCHEDULED_AT] = $data[RecurringOrderFailedMessagePayload::FIELD_ORDER_SCHEDULED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
