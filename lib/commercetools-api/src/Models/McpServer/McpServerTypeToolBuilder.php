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
 * @implements Builder<McpServerTypeTool>
 */
final class McpServerTypeToolBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $description;

    /**

     * @var ?string
     */
    private $operationType;

    /**

     * @var ?array
     */
    private $groups;

    /**
     * <p>Identifier of the tool, such as <code>read_products</code> or <code>create_orders</code>. Matches a value of <a href="ctp:api:type:McpServerTool">McpServerTool</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Human-readable description of what the tool does. Omitted when no description is available.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Whether the tool reads (<code>read</code>) or modifies (<code>write</code>) data.</p>
     *

     * @return null|string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * <p>Group identifiers the tool belongs to, such as <code>all</code> or <code>read_all</code>. Empty when the tool belongs to no group.</p>
     *

     * @return null|array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

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
     * @param ?string $operationType
     * @return $this
     */
    public function withOperationType(?string $operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * @param ?array $groups
     * @return $this
     */
    public function withGroups(?array $groups)
    {
        $this->groups = $groups;

        return $this;
    }


    public function build(): McpServerTypeTool
    {
        return new McpServerTypeToolModel(
            $this->name,
            $this->description,
            $this->operationType,
            $this->groups
        );
    }

    public static function of(): McpServerTypeToolBuilder
    {
        return new self();
    }
}
