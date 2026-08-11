<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ToolCustomization extends JsonObject
{
    public const FIELD_TOOL = 'tool';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PARAMETERS = 'parameters';

    /**
     * <p>Name of the tool to customize, such as <code>read_products</code> or <code>create_orders</code>. Must be one of the tools enabled on the MCP Server.</p>
     *

     * @return null|string
     */
    public function getTool();

    /**
     * <p>Replacement description for the tool, shown to the AI agent.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Overrides applied to individual parameters of the tool's input schema.</p>
     *

     * @return null|ParameterOverrideCollection
     */
    public function getParameters();

    /**
     * @param ?string $tool
     */
    public function setTool(?string $tool): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?ParameterOverrideCollection $parameters
     */
    public function setParameters(?ParameterOverrideCollection $parameters): void;
}
