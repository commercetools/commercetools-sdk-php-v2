<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<McpServerConfig>
 */
final class McpServerConfigBuilder implements Builder
{
    public function build(): McpServerConfig
    {
        return new McpServerConfigModel(
        );
    }

    public static function of(): McpServerConfigBuilder
    {
        return new self();
    }
}
