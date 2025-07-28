<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderSetExpiresAtAction>
 */
final class RecurringOrderSetExpiresAtActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**
     * <p>Date and time (UTC) the Recurring Order should expire. If empty, any existing value will be removed.</p>
     * <p>If the date or time is extended or removed when the <a href="ctp:api:type:RecurringOrderState">RecurringOrderState</a> is <code>Expired</code>, the state will be updated to <code>Active</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     * @return $this
     */
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }


    public function build(): RecurringOrderSetExpiresAtAction
    {
        return new RecurringOrderSetExpiresAtActionModel(
            $this->expiresAt
        );
    }

    public static function of(): RecurringOrderSetExpiresAtActionBuilder
    {
        return new self();
    }
}
