<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

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
