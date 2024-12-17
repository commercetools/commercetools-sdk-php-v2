<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PatternComponent>
 */
final class PatternComponentBuilder implements Builder
{




    public function build(): PatternComponent
    {
        return new PatternComponentModel(
        );
    }

    public static function of(): PatternComponentBuilder
    {
        return new self();
    }
}
