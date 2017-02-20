<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryUpdateAction extends UpdateAction {

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'addTaxRate' => TaxCategoryAddTaxRateAction::class,
        'changeName' => TaxCategoryChangeNameAction::class,
        'removeTaxRate' => TaxCategoryRemoveTaxRateAction::class,
        'replaceTaxRate' => TaxCategoryReplaceTaxRateAction::class,
        'setDescription' => TaxCategorySetDescriptionAction::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return TaxCategoryUpdateAction::class;
    }
}
