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
 * @implements Builder<RecurringOrderCanceled>
 */
final class RecurringOrderCanceledBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $reason;

    /**
     * <p>The reason for the cancelation.</p>
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


    public function build(): RecurringOrderCanceled
    {
        return new RecurringOrderCanceledModel(
            $this->reason
        );
    }

    public static function of(): RecurringOrderCanceledBuilder
    {
        return new self();
    }
}
