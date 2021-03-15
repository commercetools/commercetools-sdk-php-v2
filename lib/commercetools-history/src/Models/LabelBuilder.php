<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Label>
 */
final class LabelBuilder implements Builder
{




    public function build(): Label
    {
        return new LabelModel(
        );
    }

    public static function of(): LabelBuilder
    {
        return new self();
    }
}
