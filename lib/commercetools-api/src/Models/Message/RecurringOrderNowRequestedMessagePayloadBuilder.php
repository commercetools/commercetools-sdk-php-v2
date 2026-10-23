<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderNowRequestedMessagePayload>
 */
final class RecurringOrderNowRequestedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $requestedAt;

    /**

     * @var ?string
     */
    private $reason;

    /**
     * <p>Date and time (UTC) the early Order was requested.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getRequestedAt()
    {
        return $this->requestedAt;
    }

    /**
     * <p>Note provided in the <a href="ctp:api:type:RecurringOrderRequestOrderNowAction">Request Order Now</a> update action.</p>
     *

     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param ?DateTimeImmutable $requestedAt
     * @return $this
     */
    public function withRequestedAt(?DateTimeImmutable $requestedAt)
    {
        $this->requestedAt = $requestedAt;

        return $this;
    }

    /**
     * @param ?string $reason
     * @return $this
     */
    public function withReason(?string $reason)
    {
        $this->reason = $reason;

        return $this;
    }


    public function build(): RecurringOrderNowRequestedMessagePayload
    {
        return new RecurringOrderNowRequestedMessagePayloadModel(
            $this->requestedAt,
            $this->reason
        );
    }

    public static function of(): RecurringOrderNowRequestedMessagePayloadBuilder
    {
        return new self();
    }
}
