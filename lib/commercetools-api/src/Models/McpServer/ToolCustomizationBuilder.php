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
 * @implements Builder<ToolCustomization>
 */
final class ToolCustomizationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $tool;

    /**

     * @var ?string
     */
    private $description;

    /**

     * @var ?ParameterOverrideCollection
     */
    private $parameters;

    /**
     * <p>Name of the tool to customize, such as <code>read_products</code> or <code>create_orders</code>. Must be one of the tools enabled on the MCP Server.</p>
     *

     * @return null|string
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * <p>Replacement description for the tool, shown to the AI agent.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Overrides applied to individual parameters of the tool's input schema.</p>
     *

     * @return null|ParameterOverrideCollection
     */
    public function getParameters()
    {
        return $this->parameters;
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

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?ParameterOverrideCollection $parameters
     * @return $this
     */
    public function withParameters(?ParameterOverrideCollection $parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }


    public function build(): ToolCustomization
    {
        return new ToolCustomizationModel(
            $this->tool,
            $this->description,
            $this->parameters
        );
    }

    public static function of(): ToolCustomizationBuilder
    {
        return new self();
    }
}
