<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurrencePolicySchedule>
 */
final class RecurrencePolicyScheduleBuilder implements Builder
{
    public function build(): RecurrencePolicySchedule
    {
        return new RecurrencePolicyScheduleModel(
        );
    }

    public static function of(): RecurrencePolicyScheduleBuilder
    {
        return new self();
    }
}
