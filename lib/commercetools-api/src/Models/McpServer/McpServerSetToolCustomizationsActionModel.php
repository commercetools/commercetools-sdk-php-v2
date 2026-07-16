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
final class McpServerSetToolCustomizationsActionModel extends JsonObjectModel implements McpServerSetToolCustomizationsAction
{
    public const DISCRIMINATOR_VALUE = 'setToolCustomizations';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ToolCustomizationCollection
     */
    protected $toolCustomizations;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ToolCustomizationCollection $toolCustomizations = null,
        ?string $action = null
    ) {
        $this->toolCustomizations = $toolCustomizations;
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
     * <p>New list of tool customizations. Replaces the existing list entirely.</p>
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
     * @param ?ToolCustomizationCollection $toolCustomizations
     */
    public function setToolCustomizations(?ToolCustomizationCollection $toolCustomizations): void
    {
        $this->toolCustomizations = $toolCustomizations;
    }
}
