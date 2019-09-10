<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartDiscountTargetModel extends JsonObjectModel implements CartDiscountTarget
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $type = null
    ) {
        $this->type = $type;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $type;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountTarget::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    /**
     * @psalm-var array<string, class-string<CartDiscountTarget> >
     * 
     */
    private static $discriminatorClasses = [
       'multiBuyCustomLineItems' => MultiBuyCustomLineItemsTargetModel::class,
       'multiBuyLineItems' => MultiBuyLineItemsTargetModel::class,
       'customLineItems' => CartDiscountCustomLineItemsTargetModel::class,
       'lineItems' => CartDiscountLineItemsTargetModel::class,
       'shipping' => CartDiscountShippingCostTargetModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<CartDiscountTarget>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = CartDiscountTarget::DISCRIMINATOR_FIELD;
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
       
       /** @psalm-var class-string<CartDiscountTarget> */
       $type = CartDiscountTargetModel::class;
       return $type;
    }
}