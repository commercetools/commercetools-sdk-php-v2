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
 * @implements Builder<ChangeValueExternalActionValue>
 */
final class ChangeValueExternalActionValueBuilder implements Builder
{




    public function build(): ChangeValueExternalActionValue
    {
        return new ChangeValueExternalActionValueModel(
        );
    }

    public static function of(): ChangeValueExternalActionValueBuilder
    {
        return new self();
    }
}
