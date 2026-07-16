<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerTypeTool extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_GROUPS = 'groups';

    /**
     * <p>Identifier of the tool, such as <code>read_products</code> or <code>create_orders</code>. Matches a value of <a href="ctp:api:type:McpServerTool">McpServerTool</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Human-readable description of what the tool does. Omitted when no description is available.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Whether the tool reads (<code>read</code>) or modifies (<code>write</code>) data.</p>
     *

     * @return null|string
     */
    public function getOperationType();

    /**
     * <p>Group identifiers the tool belongs to, such as <code>all</code> or <code>read_all</code>. Empty when the tool belongs to no group.</p>
     *

     * @return null|array
     */
    public function getGroups();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?string $operationType
     */
    public function setOperationType(?string $operationType): void;

    /**
     * @param ?array $groups
     */
    public function setGroups(?array $groups): void;
}
