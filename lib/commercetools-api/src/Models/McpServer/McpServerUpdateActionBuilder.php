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
 * @implements Builder<McpServerUpdateAction>
 */
final class McpServerUpdateActionBuilder implements Builder
{
    public function build(): McpServerUpdateAction
    {
        return new McpServerUpdateActionModel(
        );
    }

    public static function of(): McpServerUpdateActionBuilder
    {
        return new self();
    }
}
