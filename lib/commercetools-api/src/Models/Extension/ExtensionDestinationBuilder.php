<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionDestination>
 */
final class ExtensionDestinationBuilder implements Builder
{
    public function build(): ExtensionDestination
    {
        return new ExtensionDestinationModel(
        );
    }

    public static function of(): ExtensionDestinationBuilder
    {
        return new self();
    }
}
