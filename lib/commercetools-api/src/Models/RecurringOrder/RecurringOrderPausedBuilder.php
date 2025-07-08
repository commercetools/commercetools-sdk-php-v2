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
 * @implements Builder<RecurringOrderPaused>
 */
final class RecurringOrderPausedBuilder implements Builder
{
    public function build(): RecurringOrderPaused
    {
        return new RecurringOrderPausedModel(
        );
    }

    public static function of(): RecurringOrderPausedBuilder
    {
        return new self();
    }
}
