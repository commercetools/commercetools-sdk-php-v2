<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditNotProcessed>
 */
final class OrderEditNotProcessedBuilder implements Builder
{
    public function build(): OrderEditNotProcessed
    {
        return new OrderEditNotProcessedModel(
        );
    }

    public static function of(): OrderEditNotProcessedBuilder
    {
        return new self();
    }
}
