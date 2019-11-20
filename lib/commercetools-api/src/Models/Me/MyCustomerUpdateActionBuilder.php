<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCustomerUpdateAction>
 */
final class MyCustomerUpdateActionBuilder implements Builder
{
    public function build(): MyCustomerUpdateAction
    {
        return new MyCustomerUpdateActionModel(
        );
    }

    public static function of(): MyCustomerUpdateActionBuilder
    {
        return new self();
    }
}
