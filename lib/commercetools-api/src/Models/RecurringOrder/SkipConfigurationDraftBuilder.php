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
 * @implements Builder<SkipConfigurationDraft>
 */
final class SkipConfigurationDraftBuilder implements Builder
{
    public function build(): SkipConfigurationDraft
    {
        return new SkipConfigurationDraftModel(
        );
    }

    public static function of(): SkipConfigurationDraftBuilder
    {
        return new self();
    }
}
