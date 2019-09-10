<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class AttributeTypeModel extends JsonObjectModel implements AttributeType
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $name = null
    ) {
        $this->name = $name;
        $this->name = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $name;

    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AttributeType::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * @psalm-var array<string, class-string<AttributeType> >
     * 
     */
    private static $discriminatorClasses = [
       'boolean' => AttributeBooleanTypeModel::class,
       'datetime' => AttributeDateTimeTypeModel::class,
       'date' => AttributeDateTypeModel::class,
       'enum' => AttributeEnumTypeModel::class,
       'ltext' => AttributeLocalizableTextTypeModel::class,
       'lenum' => AttributeLocalizedEnumTypeModel::class,
       'money' => AttributeMoneyTypeModel::class,
       'nested' => AttributeNestedTypeModel::class,
       'number' => AttributeNumberTypeModel::class,
       'reference' => AttributeReferenceTypeModel::class,
       'set' => AttributeSetTypeModel::class,
       'text' => AttributeTextTypeModel::class,
       'time' => AttributeTimeTypeModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<AttributeType>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = AttributeType::DISCRIMINATOR_FIELD;
       if (is_object($value) && isset($value->$fieldName)) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value->$fieldName;
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       if (is_array($value) && isset($value[$fieldName])) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value[$fieldName];
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       
       /** @psalm-var class-string<AttributeType> */
       $type = AttributeTypeModel::class;
       return $type;
    }
}