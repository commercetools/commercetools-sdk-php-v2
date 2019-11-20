<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerGroupUpdateAction>
 */
final class CustomerGroupUpdateActionBuilder implements Builder
{
    public function build(): CustomerGroupUpdateAction
    {
        return new CustomerGroupUpdateActionModel(
        );
    }

    public static function of(): CustomerGroupUpdateActionBuilder
    {
        return new self();
    }
}
