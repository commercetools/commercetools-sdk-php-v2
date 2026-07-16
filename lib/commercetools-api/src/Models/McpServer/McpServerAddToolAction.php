<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerAddToolAction extends McpServerUpdateAction
{
    public const FIELD_TOOL = 'tool';

    /**
     * <p>Name of the tool to add, such as <code>read_products</code> or <code>create_orders</code>.</p>
     *

     * @return null|string
     */
    public function getTool();

    /**
     * @param ?string $tool
     */
    public function setTool(?string $tool): void;
}
