<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class TaxCategoryUpdateActionModel extends JsonObjectModel implements TaxCategoryUpdateAction
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
           $data = $this->raw(TaxCategoryUpdateAction::FIELD_ACTION);
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
     * @psalm-var array<string, class-string<TaxCategoryUpdateAction> >
     * 
     */
    private static $discriminatorClasses = [
       'addTaxRate' => TaxCategoryAddTaxRateActionModel::class,
       'changeName' => TaxCategoryChangeNameActionModel::class,
       'removeTaxRate' => TaxCategoryRemoveTaxRateActionModel::class,
       'replaceTaxRate' => TaxCategoryReplaceTaxRateActionModel::class,
       'setDescription' => TaxCategorySetDescriptionActionModel::class,
       'setKey' => TaxCategorySetKeyActionModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<TaxCategoryUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = TaxCategoryUpdateAction::DISCRIMINATOR_FIELD;
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
       
       /** @psalm-var class-string<TaxCategoryUpdateAction> */
       $type = TaxCategoryUpdateActionModel::class;
       return $type;
    }
}