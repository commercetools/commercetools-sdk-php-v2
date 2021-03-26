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
 * @implements Builder<ChangeTargetShippingChangeValue>
 */
final class ChangeTargetShippingChangeValueBuilder implements Builder
{




    public function build(): ChangeTargetShippingChangeValue
    {
        return new ChangeTargetShippingChangeValueModel(
        );
    }

    public static function of(): ChangeTargetShippingChangeValueBuilder
    {
        return new self();
    }
}
