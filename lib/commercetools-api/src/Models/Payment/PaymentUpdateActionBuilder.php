<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentUpdateAction>
 */
final class PaymentUpdateActionBuilder implements Builder
{
    public function build(): PaymentUpdateAction
    {
        return new PaymentUpdateActionModel(
        );
    }

    public static function of(): PaymentUpdateActionBuilder
    {
        return new self();
    }
}
