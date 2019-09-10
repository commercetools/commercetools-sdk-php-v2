<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetLocaleAction extends CustomerUpdateAction
{
    
    const FIELD_LOCALE = 'locale';

    /**
     *
     * @return string|null
     */
    public function getLocale();
    public function setLocale(?string $locale): void;
}