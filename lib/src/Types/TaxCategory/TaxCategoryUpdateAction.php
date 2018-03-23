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
        'setDescription' => Types\TaxCategory\TaxCategorySetDescriptionAction::class,
        'changeName' => Types\TaxCategory\TaxCategoryChangeNameAction::class,
        'addTaxRate' => Types\TaxCategory\TaxCategoryAddTaxRateAction::class,
        'removeTaxRate' => Types\TaxCategory\TaxCategoryRemoveTaxRateAction::class,
        'setKey' => Types\TaxCategory\TaxCategorySetKeyAction::class,
        'replaceTaxRate' => Types\TaxCategory\TaxCategoryReplaceTaxRateAction::class,

    ];

}
