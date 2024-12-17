<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PatternComponentModel extends JsonObjectModel implements PatternComponent
{

    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<PatternComponent> >
     * 
     */
    private static $discriminatorClasses = [
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null
    ) {
        $this->type = $type;

    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<PatternComponent>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = PatternComponent::DISCRIMINATOR_FIELD;
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

       /** @psalm-var class-string<PatternComponent> */
       $type = PatternComponentModel::class;
       return $type;
    }
}
