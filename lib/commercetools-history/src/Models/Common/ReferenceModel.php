<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReferenceModel extends JsonObjectModel implements Reference
{

    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $typeId;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     * @psalm-var array<string, class-string<Reference> >
     * 
     */
    private static $discriminatorClasses = [
       'cart-discount' => CartDiscountReferenceModel::class,
       'category' => CategoryReferenceModel::class,
       'channel' => ChannelReferenceModel::class,
       'customer' => CustomerReferenceModel::class,
       'customer-group' => CustomerGroupReferenceModel::class,
       'discount-code' => DiscountCodeReferenceModel::class,
       'payment' => PaymentReferenceModel::class,
       'product' => ProductReferenceModel::class,
       'product-discount' => ProductDiscountReferenceModel::class,
       'product-selection' => ProductSelectionReferenceModel::class,
       'product-type' => ProductTypeReferenceModel::class,
       'recurrence-policy' => RecurrencePolicyReferenceModel::class,
       'shipping-method' => ShippingMethodReferenceModel::class,
       'state' => StateReferenceModel::class,
       'tax-category' => TaxCategoryReferenceModel::class,
       'type' => TypeReferenceModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $typeId = null
    ) {
        $this->id = $id;
        $this->typeId = $typeId;

    }

    /**
     * <p>Type of referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * <p>Unique ID of the referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }



    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<Reference>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = Reference::DISCRIMINATOR_FIELD;
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

       /** @psalm-var class-string<Reference> */
       $type = ReferenceModel::class;
       return $type;
    }
}
