<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChangeTargetChangeValueModel extends JsonObjectModel implements ChangeTargetChangeValue
{

    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<ChangeTargetChangeValue> >
     * 
     */
    private static $discriminatorClasses = [
       'customLineItems' => ChangeTargetCustomLineItemsChangeValueModel::class,
       'lineItems' => ChangeTargetLineItemsChangeValueModel::class,
       'multiBuyCustomLineItems' => ChangeTargetMultiBuyCustomLineItemsChangeValueModel::class,
       'multiBuyLineItems' => ChangeTargetMultiBuyLineItemsChangeValueModel::class,
       'pattern' => ChangeTargetPatternChangeValueModel::class,
       'shipping' => ChangeTargetShippingChangeValueModel::class,
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
     * @psalm-return class-string<ChangeTargetChangeValue>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = ChangeTargetChangeValue::DISCRIMINATOR_FIELD;
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

       /** @psalm-var class-string<ChangeTargetChangeValue> */
       $type = ChangeTargetChangeValueModel::class;
       return $type;
    }
}
