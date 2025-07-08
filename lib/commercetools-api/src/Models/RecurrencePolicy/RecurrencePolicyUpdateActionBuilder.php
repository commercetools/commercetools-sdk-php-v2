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
 * @implements Builder<RecurrencePolicyUpdateAction>
 */
final class RecurrencePolicyUpdateActionBuilder implements Builder
{
    public function build(): RecurrencePolicyUpdateAction
    {
        return new RecurrencePolicyUpdateActionModel(
        );
    }

    public static function of(): RecurrencePolicyUpdateActionBuilder
    {
        return new self();
    }
}
