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
final class McpServerAddToolActionModel extends JsonObjectModel implements McpServerAddToolAction
{
    public const DISCRIMINATOR_VALUE = 'addTool';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $tool;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $tool = null,
        ?string $action = null
    ) {
        $this->tool = $tool;
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
     * <p>Name of the tool to add, such as <code>read_products</code> or <code>create_orders</code>.</p>
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
     * @param ?string $tool
     */
    public function setTool(?string $tool): void
    {
        $this->tool = $tool;
    }
}
