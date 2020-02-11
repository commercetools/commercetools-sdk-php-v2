<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class TypeUpdateActionModel extends JsonObjectModel implements TypeUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<TypeUpdateAction> >
     * 
     */
    private static $discriminatorClasses = [
       'addEnumValue' => TypeAddEnumValueActionModel::class,
       'addFieldDefinition' => TypeAddFieldDefinitionActionModel::class,
       'addLocalizedEnumValue' => TypeAddLocalizedEnumValueActionModel::class,
       'changeEnumValueLabel' => TypeChangeEnumValueLabelActionModel::class,
       'changeEnumValueOrder' => TypeChangeEnumValueOrderActionModel::class,
       'changeFieldDefinitionLabel' => TypeChangeFieldDefinitionLabelActionModel::class,
       'changeFieldDefinitionOrder' => TypeChangeFieldDefinitionOrderActionModel::class,
       'changeInputHint' => TypeChangeInputHintActionModel::class,
       'changeKey' => TypeChangeKeyActionModel::class,
       'changeLabel' => TypeChangeLabelActionModel::class,
       'changeLocalizedEnumValueLabel' => TypeChangeLocalizedEnumValueLabelActionModel::class,
       'changeLocalizedEnumValueOrder' => TypeChangeLocalizedEnumValueOrderActionModel::class,
       'changeName' => TypeChangeNameActionModel::class,
       'removeFieldDefinition' => TypeRemoveFieldDefinitionActionModel::class,
       'setDescription' => TypeSetDescriptionActionModel::class,
    ];

    public function __construct(
    ) {
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TypeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<TypeUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = TypeUpdateAction::DISCRIMINATOR_FIELD;
       if (is_object($value) && isset($value->$fieldName)) {
           /** @psalm-var string $discriminatorValue */
           $discriminatorValue = $value->$fieldName;
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       if (is_array($value) && isset($value[$fieldName])) {
           /** @psalm-var string $discriminatorValue */
           $discriminatorValue = $value[$fieldName];
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }

       /** @psalm-var class-string<TypeUpdateAction> */
       $type = TypeUpdateActionModel::class;
       return $type;
    }
}
