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
 * @implements Builder<McpServerAddToolAction>
 */
final class McpServerAddToolActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $tool;

    /**
     * <p>Name of the tool to add, such as <code>read_products</code> or <code>create_orders</code>.</p>
     *

     * @return null|string
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * @param ?string $tool
     * @return $this
     */
    public function withTool(?string $tool)
    {
        $this->tool = $tool;

        return $this;
    }


    public function build(): McpServerAddToolAction
    {
        return new McpServerAddToolActionModel(
            $this->tool
        );
    }

    public static function of(): McpServerAddToolActionBuilder
    {
        return new self();
    }
}
