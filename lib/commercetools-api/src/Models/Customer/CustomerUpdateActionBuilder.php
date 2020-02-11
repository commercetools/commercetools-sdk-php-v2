<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerUpdateAction>
 */
final class CustomerUpdateActionBuilder implements Builder
{
    public function build(): CustomerUpdateAction
    {
        return new CustomerUpdateActionModel(
        );
    }

    public static function of(): CustomerUpdateActionBuilder
    {
        return new self();
    }
}
