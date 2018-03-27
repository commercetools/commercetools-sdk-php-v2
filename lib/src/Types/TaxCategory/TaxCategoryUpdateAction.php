<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface TaxCategoryUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addTaxRate' => Types\TaxCategory\TaxCategoryAddTaxRateAction::class,
        'changeName' => Types\TaxCategory\TaxCategoryChangeNameAction::class,
        'removeTaxRate' => Types\TaxCategory\TaxCategoryRemoveTaxRateAction::class,
        'replaceTaxRate' => Types\TaxCategory\TaxCategoryReplaceTaxRateAction::class,
        'setDescription' => Types\TaxCategory\TaxCategorySetDescriptionAction::class,
        'setKey' => Types\TaxCategory\TaxCategorySetKeyAction::class,

    ];

}
