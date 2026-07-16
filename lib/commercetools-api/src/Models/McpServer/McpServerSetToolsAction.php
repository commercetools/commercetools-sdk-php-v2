<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerSetToolsAction extends McpServerUpdateAction
{
    public const FIELD_TOOLS = 'tools';

    /**
     * <p>New list of tools to set. Replaces the existing <code>tools</code> list entirely.
     * Use <code>all</code> to enable all available tools, or specify individual tool names such as <code>read_products</code> or <code>create_orders</code>.</p>
     *

     * @return null|array
     */
    public function getTools();

    /**
     * @param ?array $tools
     */
    public function setTools(?array $tools): void;
}
