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
 * @implements Builder<RecurringOrderExpiresAtSetMessagePayload>
 */
final class RecurringOrderExpiresAtSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $newExpiresAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $oldExpiresAt;

    /**
     * <p>Expiration date and time of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetExpiresAtAction">Set Expires At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getNewExpiresAt()
    {
        return $this->newExpiresAt;
    }

    /**
     * <p>Expiration date and time of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetExpiresAtAction">Set Expires At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getOldExpiresAt()
    {
        return $this->oldExpiresAt;
    }

    /**
     * @param ?DateTimeImmutable $newExpiresAt
     * @return $this
     */
    public function withNewExpiresAt(?DateTimeImmutable $newExpiresAt)
    {
        $this->newExpiresAt = $newExpiresAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $oldExpiresAt
     * @return $this
     */
    public function withOldExpiresAt(?DateTimeImmutable $oldExpiresAt)
    {
        $this->oldExpiresAt = $oldExpiresAt;

        return $this;
    }


    public function build(): RecurringOrderExpiresAtSetMessagePayload
    {
        return new RecurringOrderExpiresAtSetMessagePayloadModel(
            $this->newExpiresAt,
            $this->oldExpiresAt
        );
    }

    public static function of(): RecurringOrderExpiresAtSetMessagePayloadBuilder
    {
        return new self();
    }
}
