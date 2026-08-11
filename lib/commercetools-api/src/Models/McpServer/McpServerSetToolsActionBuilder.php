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
 * @implements Builder<McpServerSetToolsAction>
 */
final class McpServerSetToolsActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $tools;

    /**
     * <p>New list of tools to set. Replaces the existing <code>tools</code> list entirely.
     * Use <code>all</code> to enable all available tools, or specify individual tool names such as <code>read_products</code> or <code>create_orders</code>.</p>
     *

     * @return null|array
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * @param ?array $tools
     * @return $this
     */
    public function withTools(?array $tools)
    {
        $this->tools = $tools;

        return $this;
    }


    public function build(): McpServerSetToolsAction
    {
        return new McpServerSetToolsActionModel(
            $this->tools
        );
    }

    public static function of(): McpServerSetToolsActionBuilder
    {
        return new self();
    }
}
