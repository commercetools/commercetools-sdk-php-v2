<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditResult>
 */
final class OrderEditResultBuilder implements Builder
{
    public function build(): OrderEditResult
    {
        return new OrderEditResultModel(
        );
    }

    public static function of(): OrderEditResultBuilder
    {
        return new self();
    }
}
