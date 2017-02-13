<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeType extends JsonObject {
    protected $name;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'name';
    public function __construct(array $data = []) {
        $this->name = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'boolean' => AttributeBooleanType::class,
        'datetime' => AttributeDateTimeType::class,
        'date' => AttributeDateType::class,
        'time' => AttributeTimeType::class,
        'enum' => AttributeEnumType::class,
        'lenum' => AttributeLocalizedEnumType::class,
        'money' => AttributeMoneyType::class,
        'nested' => AttributeNestedType::class,
        'number' => AttributeNumberType::class,
        'reference' => AttributeReferenceType::class,
        'set' => AttributeSetType::class,
        'text' => AttributeTextType::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return AttributeType::class;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                
}
