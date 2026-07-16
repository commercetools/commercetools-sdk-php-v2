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
final class McpServerRemoveToolCustomizationActionModel extends JsonObjectModel implements McpServerRemoveToolCustomizationAction
{
    public const DISCRIMINATOR_VALUE = 'removeToolCustomization';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?RemoveToolCustomizationTarget
     */
    protected $toolCustomization;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RemoveToolCustomizationTarget $toolCustomization = null,
        ?string $action = null
    ) {
        $this->toolCustomization = $toolCustomization;
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
     * <p>Identifies the tool customization to remove by its tool name.</p>
     *
     *
     * @return null|RemoveToolCustomizationTarget
     */
    public function getToolCustomization()
    {
        if (is_null($this->toolCustomization)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOOL_CUSTOMIZATION);
            if (is_null($data)) {
                return null;
            }

            $this->toolCustomization = RemoveToolCustomizationTargetModel::of($data);
        }

        return $this->toolCustomization;
    }


    /**
     * @param ?RemoveToolCustomizationTarget $toolCustomization
     */
    public function setToolCustomization(?RemoveToolCustomizationTarget $toolCustomization): void
    {
        $this->toolCustomization = $toolCustomization;
    }
}
