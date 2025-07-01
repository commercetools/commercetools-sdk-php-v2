<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodUpdateAction>
 */
final class PaymentMethodUpdateActionBuilder implements Builder
{
    public function build(): PaymentMethodUpdateAction
    {
        return new PaymentMethodUpdateActionModel(
        );
    }

    public static function of(): PaymentMethodUpdateActionBuilder
    {
        return new self();
    }
}
