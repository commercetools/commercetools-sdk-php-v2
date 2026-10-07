<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AllocationDraft>
 */
final class AllocationDraftBuilder implements Builder
{
    public function build(): AllocationDraft
    {
        return new AllocationDraftModel(
        );
    }

    public static function of(): AllocationDraftBuilder
    {
        return new self();
    }
}
