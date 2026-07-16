<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CommerceMcpServerConfigDraft extends McpServerConfigDraft
{
    public const FIELD_MAJOR_VERSION = 'majorVersion';
    public const FIELD_TOOLS = 'tools';
    public const FIELD_TOOL_CUSTOMIZATIONS = 'toolCustomizations';
    public const FIELD_JSON_OUTPUT_FILTERING = 'jsonOutputFiltering';
    public const FIELD_TOOL_OUTPUT_FORMATTING = 'toolOutputFormatting';

    /**
     * <p>Major version of this MCP Server type. Supported versions are <code>v1</code> (deprecated) and <code>v4</code>.</p>
     *

     * @return null|string
     */
    public function getMajorVersion();

    /**
     * <p>List of tools to enable for this MCP Server. Use <code>all</code> to enable all available tools, or specify individual tool names such as <code>read_products</code> or <code>create_orders</code>. To reduce the number of LLM turns and improve overall performance, it is advisable to expose only the tools that are necessary, or at least minimize the exposure of tools that are unlikely to be used.</p>
     *

     * @return null|array
     */
    public function getTools();

    /**
     * <p>Per-tool customizations applied at <code>tools/list</code> and <code>tools/call</code> time, such as overriding a tool's description or constraining its parameters.</p>
     *

     * @return null|ToolCustomizationCollection
     */
    public function getToolCustomizations();

    /**
     * <p>Response field-filtering rules applied to tool responses.</p>
     *

     * @return null|McpServerJsonOutputFiltering
     */
    public function getJsonOutputFiltering();

    /**
     * <p>Output formatting applied to tool responses. When absent, responses are left untouched.</p>
     *

     * @return null|string
     */
    public function getToolOutputFormatting();

    /**
     * @param ?string $majorVersion
     */
    public function setMajorVersion(?string $majorVersion): void;

    /**
     * @param ?array $tools
     */
    public function setTools(?array $tools): void;

    /**
     * @param ?ToolCustomizationCollection $toolCustomizations
     */
    public function setToolCustomizations(?ToolCustomizationCollection $toolCustomizations): void;

    /**
     * @param ?McpServerJsonOutputFiltering $jsonOutputFiltering
     */
    public function setJsonOutputFiltering(?McpServerJsonOutputFiltering $jsonOutputFiltering): void;

    /**
     * @param ?string $toolOutputFormatting
     */
    public function setToolOutputFormatting(?string $toolOutputFormatting): void;
}
