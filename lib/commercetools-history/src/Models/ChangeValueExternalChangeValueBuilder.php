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
 * @implements Builder<ChangeValueExternalChangeValue>
 */
final class ChangeValueExternalChangeValueBuilder implements Builder
{




    public function build(): ChangeValueExternalChangeValue
    {
        return new ChangeValueExternalChangeValueModel(
        );
    }

    public static function of(): ChangeValueExternalChangeValueBuilder
    {
        return new self();
    }
}
