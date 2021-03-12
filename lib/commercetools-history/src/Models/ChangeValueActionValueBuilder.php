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
 * @implements Builder<ChangeValueActionValue>
 */
final class ChangeValueActionValueBuilder implements Builder
{




    public function build(): ChangeValueActionValue
    {
        return new ChangeValueActionValueModel(
        );
    }

    public static function of(): ChangeValueActionValueBuilder
    {
        return new self();
    }
}
