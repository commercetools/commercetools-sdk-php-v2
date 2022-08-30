<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTypeUpdateActionModel extends JsonObjectModel implements ProductTypeUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProductTypeUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAttributeDefinition' => ProductTypeAddAttributeDefinitionActionModel::class,
       'addLocalizedEnumValue' => ProductTypeAddLocalizedEnumValueActionModel::class,
       'addPlainEnumValue' => ProductTypeAddPlainEnumValueActionModel::class,
       'changeAttributeConstraint' => ProductTypeChangeAttributeConstraintActionModel::class,
       'changeAttributeName' => ProductTypeChangeAttributeNameActionModel::class,
       'changeAttributeOrderByName' => ProductTypeChangeAttributeOrderByNameActionModel::class,
       'changeDescription' => ProductTypeChangeDescriptionActionModel::class,
       'changeEnumKey' => ProductTypeChangeEnumKeyActionModel::class,
       'changeInputHint' => ProductTypeChangeInputHintActionModel::class,
       'changeIsSearchable' => ProductTypeChangeIsSearchableActionModel::class,
       'changeLabel' => ProductTypeChangeLabelActionModel::class,
       'changeLocalizedEnumValueLabel' => ProductTypeChangeLocalizedEnumValueLabelActionModel::class,
       'changeLocalizedEnumValueOrder' => ProductTypeChangeLocalizedEnumValueOrderActionModel::class,
       'changeName' => ProductTypeChangeNameActionModel::class,
       'changePlainEnumValueLabel' => ProductTypeChangePlainEnumValueLabelActionModel::class,
       'changePlainEnumValueOrder' => ProductTypeChangePlainEnumValueOrderActionModel::class,
       'removeAttributeDefinition' => ProductTypeRemoveAttributeDefinitionActionModel::class,
       'removeEnumValues' => ProductTypeRemoveEnumValuesActionModel::class,
       'setInputTip' => ProductTypeSetInputTipActionModel::class,
       'setKey' => ProductTypeSetKeyActionModel::class,
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
     * @psalm-return class-string<ProductTypeUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProductTypeUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ProductTypeUpdateAction> */
        $type = ProductTypeUpdateActionModel::class;
        return $type;
    }
}
