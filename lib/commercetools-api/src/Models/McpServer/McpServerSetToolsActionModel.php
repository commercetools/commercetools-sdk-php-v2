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
final class McpServerSetToolsActionModel extends JsonObjectModel implements McpServerSetToolsAction
{
    public const DISCRIMINATOR_VALUE = 'setTools';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $tools;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $tools = null,
        ?string $action = null
    ) {
        $this->tools = $tools;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Identifies the update action to perform, such as <code>addTool</code>, <code>removeTool</code>, or <code>setTools</code>.</p>
     *
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New list of tools to set. Replaces the existing <code>tools</code> list entirely.
     * Use <code>all</code> to enable all available tools, or specify individual tool names such as <code>read_products</code> or <code>create_orders</code>.</p>
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
     * @param ?array $tools
     */
    public function setTools(?array $tools): void
    {
        $this->tools = $tools;
    }
}
