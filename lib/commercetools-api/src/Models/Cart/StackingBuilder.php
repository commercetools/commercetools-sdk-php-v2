<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Stacking>
 */
final class StackingBuilder implements Builder
{
    public function build(): Stacking
    {
        return new StackingModel(
        );
    }

    public static function of(): StackingBuilder
    {
        return new self();
    }
}
