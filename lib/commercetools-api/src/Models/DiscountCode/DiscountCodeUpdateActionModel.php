<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class DiscountCodeUpdateActionModel extends JsonObjectModel implements DiscountCodeUpdateAction
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $action;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    /**
     * @psalm-var array<string, class-string<DiscountCodeUpdateAction> >
     * 
     */
    private static $discriminatorClasses = [
       'changeCartDiscounts' => DiscountCodeChangeCartDiscountsActionModel::class,
       'changeGroups' => DiscountCodeChangeGroupsActionModel::class,
       'changeIsActive' => DiscountCodeChangeIsActiveActionModel::class,
       'setCartPredicate' => DiscountCodeSetCartPredicateActionModel::class,
       'setCustomField' => DiscountCodeSetCustomFieldActionModel::class,
       'setCustomType' => DiscountCodeSetCustomTypeActionModel::class,
       'setDescription' => DiscountCodeSetDescriptionActionModel::class,
       'setMaxApplications' => DiscountCodeSetMaxApplicationsActionModel::class,
       'setMaxApplicationsPerCustomer' => DiscountCodeSetMaxApplicationsPerCustomerActionModel::class,
       'setName' => DiscountCodeSetNameActionModel::class,
       'setValidFrom' => DiscountCodeSetValidFromActionModel::class,
       'setValidFromAndUntil' => DiscountCodeSetValidFromAndUntilActionModel::class,
       'setValidUntil' => DiscountCodeSetValidUntilActionModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<DiscountCodeUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = DiscountCodeUpdateAction::DISCRIMINATOR_FIELD;
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
       
       /** @psalm-var class-string<DiscountCodeUpdateAction> */
       $type = DiscountCodeUpdateActionModel::class;
       return $type;
    }
}