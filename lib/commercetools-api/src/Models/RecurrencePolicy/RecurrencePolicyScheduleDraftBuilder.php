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
 * @implements Builder<RecurrencePolicyScheduleDraft>
 */
final class RecurrencePolicyScheduleDraftBuilder implements Builder
{
    public function build(): RecurrencePolicyScheduleDraft
    {
        return new RecurrencePolicyScheduleDraftModel(
        );
    }

    public static function of(): RecurrencePolicyScheduleDraftBuilder
    {
        return new self();
    }
}
