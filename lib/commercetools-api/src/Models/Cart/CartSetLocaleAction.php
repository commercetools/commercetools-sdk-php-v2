<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetLocaleAction extends CartUpdateAction
{
    
    const FIELD_LOCALE = 'locale';

    /**
     *
     * @return string|null
     */
    public function getLocale();
    public function setLocale(?string $locale): void;
}