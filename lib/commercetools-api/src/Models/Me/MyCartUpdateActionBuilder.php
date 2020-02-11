<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartUpdateAction>
 */
final class MyCartUpdateActionBuilder implements Builder
{




    public function build(): MyCartUpdateAction
    {
        return new MyCartUpdateActionModel(
        );
    }

    public static function of(): MyCartUpdateActionBuilder
    {
        return new self();
    }
}
