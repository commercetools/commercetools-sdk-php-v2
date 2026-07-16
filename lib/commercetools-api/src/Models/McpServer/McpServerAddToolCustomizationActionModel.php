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
final class McpServerAddToolCustomizationActionModel extends JsonObjectModel implements McpServerAddToolCustomizationAction
{
    public const DISCRIMINATOR_VALUE = 'addToolCustomization';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ToolCustomization
     */
    protected $toolCustomization;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ToolCustomization $toolCustomization = null,
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
     * <p>Tool customization to add.</p>
     *
     *
     * @return null|ToolCustomization
     */
    public function getToolCustomization()
    {
        if (is_null($this->toolCustomization)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOOL_CUSTOMIZATION);
            if (is_null($data)) {
                return null;
            }

            $this->toolCustomization = ToolCustomizationModel::of($data);
        }

        return $this->toolCustomization;
    }


    /**
     * @param ?ToolCustomization $toolCustomization
     */
    public function setToolCustomization(?ToolCustomization $toolCustomization): void
    {
        $this->toolCustomization = $toolCustomization;
    }
}
