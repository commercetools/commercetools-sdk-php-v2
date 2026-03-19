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
 * @implements Builder<RecurringOrdersOnly>
 */
final class RecurringOrdersOnlyBuilder implements Builder
{
    public function build(): RecurringOrdersOnly
    {
        return new RecurringOrdersOnlyModel(
        );
    }

    public static function of(): RecurringOrdersOnlyBuilder
    {
        return new self();
    }
}
