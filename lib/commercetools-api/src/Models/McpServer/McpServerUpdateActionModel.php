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
final class McpServerUpdateActionModel extends JsonObjectModel implements McpServerUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<McpServerUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addTool' => McpServerAddToolActionModel::class,
       'addToolCustomization' => McpServerAddToolCustomizationActionModel::class,
       'removeTool' => McpServerRemoveToolActionModel::class,
       'removeToolCustomization' => McpServerRemoveToolCustomizationActionModel::class,
       'setAuthenticationMode' => McpServerSetAuthenticationModeActionModel::class,
       'setDescription' => McpServerSetDescriptionActionModel::class,
       'setJsonOutputFiltering' => McpServerSetJsonOutputFilteringActionModel::class,
       'setName' => McpServerSetNameActionModel::class,
       'setState' => McpServerSetStateActionModel::class,
       'setToolCustomizations' => McpServerSetToolCustomizationsActionModel::class,
       'setToolOutputFormatting' => McpServerSetToolOutputFormattingActionModel::class,
       'setTools' => McpServerSetToolsActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $action = null
    ) {
        $this->action = $action;
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
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<McpServerUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = McpServerUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<McpServerUpdateAction> */
        $type = McpServerUpdateActionModel::class;
        return $type;
    }
}
