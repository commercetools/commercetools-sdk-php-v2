<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeUpdateAction>
 */
final class DiscountCodeUpdateActionBuilder implements Builder
{




    public function build(): DiscountCodeUpdateAction
    {
        return new DiscountCodeUpdateActionModel(
        );
    }

    public static function of(): DiscountCodeUpdateActionBuilder
    {
        return new self();
    }
}
