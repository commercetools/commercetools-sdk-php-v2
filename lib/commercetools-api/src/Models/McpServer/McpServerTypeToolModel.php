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
final class McpServerTypeToolModel extends JsonObjectModel implements McpServerTypeTool
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $description;

    /**
     *
     * @var ?string
     */
    protected $operationType;

    /**
     *
     * @var ?array
     */
    protected $groups;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $description = null,
        ?string $operationType = null,
        ?array $groups = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->operationType = $operationType;
        $this->groups = $groups;
    }

    /**
     * <p>Identifier of the tool, such as <code>read_products</code> or <code>create_orders</code>. Matches a value of <a href="ctp:api:type:McpServerTool">McpServerTool</a>.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Human-readable description of what the tool does. Omitted when no description is available.</p>
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
     * <p>Whether the tool reads (<code>read</code>) or modifies (<code>write</code>) data.</p>
     *
     *
     * @return null|string
     */
    public function getOperationType()
    {
        if (is_null($this->operationType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OPERATION_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->operationType = (string) $data;
        }

        return $this->operationType;
    }

    /**
     * <p>Group identifiers the tool belongs to, such as <code>all</code> or <code>read_all</code>. Empty when the tool belongs to no group.</p>
     *
     *
     * @return null|array
     */
    public function getGroups()
    {
        if (is_null($this->groups)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_GROUPS);
            if (is_null($data)) {
                return null;
            }
            $this->groups = $data;
        }

        return $this->groups;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?string $operationType
     */
    public function setOperationType(?string $operationType): void
    {
        $this->operationType = $operationType;
    }

    /**
     * @param ?array $groups
     */
    public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }
}
