<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeValueChangeValue>
 */
final class ChangeValueChangeValueBuilder implements Builder
{




    public function build(): ChangeValueChangeValue
    {
        return new ChangeValueChangeValueModel(
        );
    }

    public static function of(): ChangeValueChangeValueBuilder
    {
        return new self();
    }
}
