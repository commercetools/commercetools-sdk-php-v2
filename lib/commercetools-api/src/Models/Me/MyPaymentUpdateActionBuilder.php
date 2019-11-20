<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyPaymentUpdateAction>
 */
final class MyPaymentUpdateActionBuilder implements Builder
{
    public function build(): MyPaymentUpdateAction
    {
        return new MyPaymentUpdateActionModel(
        );
    }

    public static function of(): MyPaymentUpdateActionBuilder
    {
        return new self();
    }
}
