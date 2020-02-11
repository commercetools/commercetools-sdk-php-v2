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
 * @implements Builder<ExtensionHttpDestinationAuthentication>
 */
final class ExtensionHttpDestinationAuthenticationBuilder implements Builder
{




    public function build(): ExtensionHttpDestinationAuthentication
    {
        return new ExtensionHttpDestinationAuthenticationModel(
        );
    }

    public static function of(): ExtensionHttpDestinationAuthenticationBuilder
    {
        return new self();
    }
}
