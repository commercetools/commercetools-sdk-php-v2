<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ProjectUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeCurrencies' => Types\Project\ProjectChangeCurrenciesAction::class,
        'changeName' => Types\Project\ProjectChangeNameAction::class,
        'changeCountries' => Types\Project\ProjectChangeCountriesAction::class,
        'changeMessagesEnabled' => Types\Project\ProjectChangeMessagesEnabledAction::class,
        'changeLanguages' => Types\Project\ProjectChangeLanguagesAction::class,
        'setShippingRateInputType' => Types\Project\ProjectSetShippingRateInputTypeAction::class,

    ];

}
