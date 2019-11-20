<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionUpdateAction>
 */
final class ExtensionUpdateActionBuilder implements Builder
{
    public function build(): ExtensionUpdateAction
    {
        return new ExtensionUpdateActionModel(
        );
    }

    public static function of(): ExtensionUpdateActionBuilder
    {
        return new self();
    }
}
