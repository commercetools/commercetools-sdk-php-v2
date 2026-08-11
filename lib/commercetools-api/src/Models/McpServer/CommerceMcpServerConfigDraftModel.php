<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CommerceMcpServerConfigDraftModel extends JsonObjectModel implements CommerceMcpServerConfigDraft
{
    public const DISCRIMINATOR_VALUE = 'CommerceMCP';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $majorVersion;

    /**
     *
     * @var ?array
     */
    protected $tools;

    /**
     *
     * @var ?ToolCustomizationCollection
     */
    protected $toolCustomizations;

    /**
     *
     * @var ?McpServerJsonOutputFiltering
     */
    protected $jsonOutputFiltering;

    /**
     *
     * @var ?string
     */
    protected $toolOutputFormatting;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $majorVersion = null,
        ?array $tools = null,
        ?ToolCustomizationCollection $toolCustomizations = null,
        ?McpServerJsonOutputFiltering $jsonOutputFiltering = null,
        ?string $toolOutputFormatting = null,
        ?string $type = null
    ) {
        $this->majorVersion = $majorVersion;
        $this->tools = $tools;
        $this->toolCustomizations = $toolCustomizations;
        $this->jsonOutputFiltering = $jsonOutputFiltering;
        $this->toolOutputFormatting = $toolOutputFormatting;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>MCP Server type. Determines the shape of the configuration and the set of tools available for this MCP Server.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Major version of this MCP Server type. Supported versions are <code>v1</code> (deprecated) and <code>v4</code>.</p>
     *
     *
     * @return null|string
     */
    public function getMajorVersion()
    {
        if (is_null($this->majorVersion)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MAJOR_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->majorVersion = (string) $data;
        }

        return $this->majorVersion;
    }

    /**
     * <p>List of tools to enable for this MCP Server. Use <code>all</code> to enable all available tools, or specify individual tool names such as <code>read_products</code> or <code>create_orders</code>. To reduce the number of LLM turns and improve overall performance, it is advisable to expose only the tools that are necessary, or at least minimize the exposure of tools that are unlikely to be used.</p>
     *
     *
     * @return null|array
     */
    public function getTools()
    {
        if (is_null($this->tools)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_TOOLS);
            if (is_null($data)) {
                return null;
            }
            $this->tools = $data;
        }

        return $this->tools;
    }

    /**
     * <p>Per-tool customizations applied at <code>tools/list</code> and <code>tools/call</code> time, such as overriding a tool's description or constraining its parameters.</p>
     *
     *
     * @return null|ToolCustomizationCollection
     */
    public function getToolCustomizations()
    {
        if (is_null($this->toolCustomizations)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TOOL_CUSTOMIZATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->toolCustomizations = ToolCustomizationCollection::fromArray($data);
        }

        return $this->toolCustomizations;
    }

    /**
     * <p>Response field-filtering rules applied to tool responses.</p>
     *
     *
     * @return null|McpServerJsonOutputFiltering
     */
    public function getJsonOutputFiltering()
    {
        if (is_null($this->jsonOutputFiltering)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_JSON_OUTPUT_FILTERING);
            if (is_null($data)) {
                return null;
            }

            $this->jsonOutputFiltering = McpServerJsonOutputFilteringModel::of($data);
        }

        return $this->jsonOutputFiltering;
    }

    /**
     * <p>Output formatting applied to tool responses. When absent, responses are left untouched.</p>
     *
     *
     * @return null|string
     */
    public function getToolOutputFormatting()
    {
        if (is_null($this->toolOutputFormatting)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOOL_OUTPUT_FORMATTING);
            if (is_null($data)) {
                return null;
            }
            $this->toolOutputFormatting = (string) $data;
        }

        return $this->toolOutputFormatting;
    }


    /**
     * @param ?string $majorVersion
     */
    public function setMajorVersion(?string $majorVersion): void
    {
        $this->majorVersion = $majorVersion;
    }

    /**
     * @param ?array $tools
     */
    public function setTools(?array $tools): void
    {
        $this->tools = $tools;
    }

    /**
     * @param ?ToolCustomizationCollection $toolCustomizations
     */
    public function setToolCustomizations(?ToolCustomizationCollection $toolCustomizations): void
    {
        $this->toolCustomizations = $toolCustomizations;
    }

    /**
     * @param ?McpServerJsonOutputFiltering $jsonOutputFiltering
     */
    public function setJsonOutputFiltering(?McpServerJsonOutputFiltering $jsonOutputFiltering): void
    {
        $this->jsonOutputFiltering = $jsonOutputFiltering;
    }

    /**
     * @param ?string $toolOutputFormatting
     */
    public function setToolOutputFormatting(?string $toolOutputFormatting): void
    {
        $this->toolOutputFormatting = $toolOutputFormatting;
    }
}
