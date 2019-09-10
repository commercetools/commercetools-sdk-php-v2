<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ProjectChangeCurrenciesAction extends ProjectUpdateAction
{
    
    const FIELD_CURRENCIES = 'currencies';

    /**
     *
     * @return array|null
     */
    public function getCurrencies();
    public function setCurrencies(?array $currencies): void;
}