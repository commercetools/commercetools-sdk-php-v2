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
use stdClass;

/**
 * @implements Builder<RecurringOrderRequestOrderNowAction>
 */
final class RecurringOrderRequestOrderNowActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $reason;

    /**
     * <p>Note recorded on the resulting <a href="ctp:api:type:RecurringOrderNowRequestedMessage">RecurringOrderNowRequested</a> Message.</p>
     * <p>If <code>reason</code> is longer than 256 characters, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
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


    public function build(): RecurringOrderRequestOrderNowAction
    {
        return new RecurringOrderRequestOrderNowActionModel(
            $this->reason
        );
    }

    public static function of(): RecurringOrderRequestOrderNowActionBuilder
    {
        return new self();
    }
}
