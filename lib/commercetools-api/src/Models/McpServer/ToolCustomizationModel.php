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
final class ToolCustomizationModel extends JsonObjectModel implements ToolCustomization
{
    /**
     *
     * @var ?string
     */
    protected $tool;

    /**
     *
     * @var ?string
     */
    protected $description;

    /**
     *
     * @var ?ParameterOverrideCollection
     */
    protected $parameters;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $tool = null,
        ?string $description = null,
        ?ParameterOverrideCollection $parameters = null
    ) {
        $this->tool = $tool;
        $this->description = $description;
        $this->parameters = $parameters;
    }

    /**
     * <p>Name of the tool to customize, such as <code>read_products</code> or <code>create_orders</code>. Must be one of the tools enabled on the MCP Server.</p>
     *
     *
     * @return null|string
     */
    public function getTool()
    {
        if (is_null($this->tool)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOOL);
            if (is_null($data)) {
                return null;
            }
            $this->tool = (string) $data;
        }

        return $this->tool;
    }

    /**
     * <p>Replacement description for the tool, shown to the AI agent.</p>
     *
     *
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * <p>Overrides applied to individual parameters of the tool's input schema.</p>
     *
     *
     * @return null|ParameterOverrideCollection
     */
    public function getParameters()
    {
        if (is_null($this->parameters)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PARAMETERS);
            if (is_null($data)) {
                return null;
            }
            $this->parameters = ParameterOverrideCollection::fromArray($data);
        }

        return $this->parameters;
    }


    /**
     * @param ?string $tool
     */
    public function setTool(?string $tool): void
    {
        $this->tool = $tool;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?ParameterOverrideCollection $parameters
     */
    public function setParameters(?ParameterOverrideCollection $parameters): void
    {
        $this->parameters = $parameters;
    }
}
