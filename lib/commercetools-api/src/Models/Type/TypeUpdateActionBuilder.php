<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeUpdateAction>
 */
final class TypeUpdateActionBuilder implements Builder
{
    public function build(): TypeUpdateAction
    {
        return new TypeUpdateActionModel(
        );
    }

    public static function of(): TypeUpdateActionBuilder
    {
        return new self();
    }
}
