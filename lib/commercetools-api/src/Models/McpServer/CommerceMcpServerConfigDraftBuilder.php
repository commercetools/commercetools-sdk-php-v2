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
 * @implements Builder<CommerceMcpServerConfigDraft>
 */
final class CommerceMcpServerConfigDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $majorVersion;

    /**

     * @var ?array
     */
    private $tools;

    /**

     * @var ?ToolCustomizationCollection
     */
    private $toolCustomizations;

    /**

     * @var null|McpServerJsonOutputFiltering|McpServerJsonOutputFilteringBuilder
     */
    private $jsonOutputFiltering;

    /**

     * @var ?string
     */
    private $toolOutputFormatting;

    /**
     * <p>Major version of this MCP Server type. Supported versions are <code>v1</code> (deprecated) and <code>v4</code>.</p>
     *

     * @return null|string
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * <p>List of tools to enable for this MCP Server. Use <code>all</code> to enable all available tools, or specify individual tool names such as <code>read_products</code> or <code>create_orders</code>. To reduce the number of LLM turns and improve overall performance, it is advisable to expose only the tools that are necessary, or at least minimize the exposure of tools that are unlikely to be used.</p>
     *

     * @return null|array
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * <p>Per-tool customizations applied at <code>tools/list</code> and <code>tools/call</code> time, such as overriding a tool's description or constraining its parameters.</p>
     *

     * @return null|ToolCustomizationCollection
     */
    public function getToolCustomizations()
    {
        return $this->toolCustomizations;
    }

    /**
     * <p>Response field-filtering rules applied to tool responses.</p>
     *

     * @return null|McpServerJsonOutputFiltering
     */
    public function getJsonOutputFiltering()
    {
        return $this->jsonOutputFiltering instanceof McpServerJsonOutputFilteringBuilder ? $this->jsonOutputFiltering->build() : $this->jsonOutputFiltering;
    }

    /**
     * <p>Output formatting applied to tool responses. When absent, responses are left untouched.</p>
     *

     * @return null|string
     */
    public function getToolOutputFormatting()
    {
        return $this->toolOutputFormatting;
    }

    /**
     * @param ?string $majorVersion
     * @return $this
     */
    public function withMajorVersion(?string $majorVersion)
    {
        $this->majorVersion = $majorVersion;

        return $this;
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

    /**
     * @param ?ToolCustomizationCollection $toolCustomizations
     * @return $this
     */
    public function withToolCustomizations(?ToolCustomizationCollection $toolCustomizations)
    {
        $this->toolCustomizations = $toolCustomizations;

        return $this;
    }

    /**
     * @param ?McpServerJsonOutputFiltering $jsonOutputFiltering
     * @return $this
     */
    public function withJsonOutputFiltering(?McpServerJsonOutputFiltering $jsonOutputFiltering)
    {
        $this->jsonOutputFiltering = $jsonOutputFiltering;

        return $this;
    }

    /**
     * @param ?string $toolOutputFormatting
     * @return $this
     */
    public function withToolOutputFormatting(?string $toolOutputFormatting)
    {
        $this->toolOutputFormatting = $toolOutputFormatting;

        return $this;
    }

    /**
     * @deprecated use withJsonOutputFiltering() instead
     * @return $this
     */
    public function withJsonOutputFilteringBuilder(?McpServerJsonOutputFilteringBuilder $jsonOutputFiltering)
    {
        $this->jsonOutputFiltering = $jsonOutputFiltering;

        return $this;
    }

    public function build(): CommerceMcpServerConfigDraft
    {
        return new CommerceMcpServerConfigDraftModel(
            $this->majorVersion,
            $this->tools,
            $this->toolCustomizations,
            $this->jsonOutputFiltering instanceof McpServerJsonOutputFilteringBuilder ? $this->jsonOutputFiltering->build() : $this->jsonOutputFiltering,
            $this->toolOutputFormatting
        );
    }

    public static function of(): CommerceMcpServerConfigDraftBuilder
    {
        return new self();
    }
}
