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
 * @implements Builder<NonRecurringOrdersOnlyDraft>
 */
final class NonRecurringOrdersOnlyDraftBuilder implements Builder
{
    public function build(): NonRecurringOrdersOnlyDraft
    {
        return new NonRecurringOrdersOnlyDraftModel(
        );
    }

    public static function of(): NonRecurringOrdersOnlyDraftBuilder
    {
        return new self();
    }
}
