<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Error\RecurringOrderFailureErrorCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderFailedMessagePayload>
 */
final class RecurringOrderFailedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cartId;

    /**

     * @var ?DateTimeImmutable
     */
    private $failedAt;

    /**

     * @var ?string
     */
    private $failureReason;

    /**

     * @var ?DateTimeImmutable
     */
    private $orderScheduledAt;

    /**

     * @var ?RecurringOrderFailureErrorCollection
     */
    private $errors;

    /**
     * <p>ID of the <a href="ctp:api:type:Cart">Cart</a> used in the failed Order creation attempt.</p>
     *

     * @return null|string
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * <p>Date and time (UTC) when the Order creation attempt failed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getFailedAt()
    {
        return $this->failedAt;
    }

    /**
     * <p>Description of why the Order creation failed, such as insufficient stock.</p>
     *

     * @return null|string
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }

    /**
     * <p>Date and time (UTC) the Order was scheduled to be created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getOrderScheduledAt()
    {
        return $this->orderScheduledAt;
    }

    /**
     * <p>Errors due to which the Order creation failed.</p>
     *

     * @return null|RecurringOrderFailureErrorCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ?string $cartId
     * @return $this
     */
    public function withCartId(?string $cartId)
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $failedAt
     * @return $this
     */
    public function withFailedAt(?DateTimeImmutable $failedAt)
    {
        $this->failedAt = $failedAt;

        return $this;
    }

    /**
     * @param ?string $failureReason
     * @return $this
     */
    public function withFailureReason(?string $failureReason)
    {
        $this->failureReason = $failureReason;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $orderScheduledAt
     * @return $this
     */
    public function withOrderScheduledAt(?DateTimeImmutable $orderScheduledAt)
    {
        $this->orderScheduledAt = $orderScheduledAt;

        return $this;
    }

    /**
     * @param ?RecurringOrderFailureErrorCollection $errors
     * @return $this
     */
    public function withErrors(?RecurringOrderFailureErrorCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }


    public function build(): RecurringOrderFailedMessagePayload
    {
        return new RecurringOrderFailedMessagePayloadModel(
            $this->cartId,
            $this->failedAt,
            $this->failureReason,
            $this->orderScheduledAt,
            $this->errors
        );
    }

    public static function of(): RecurringOrderFailedMessagePayloadBuilder
    {
        return new self();
    }
}
