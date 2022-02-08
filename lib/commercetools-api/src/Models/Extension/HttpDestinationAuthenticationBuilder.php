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
 * @implements Builder<HttpDestinationAuthentication>
 */
final class HttpDestinationAuthenticationBuilder implements Builder
{
    public function build(): HttpDestinationAuthentication
    {
        return new HttpDestinationAuthenticationModel(
        );
    }

    public static function of(): HttpDestinationAuthenticationBuilder
    {
        return new self();
    }
}
