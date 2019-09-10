<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetAnonymousIdAction extends CartUpdateAction
{
    
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    public function setAnonymousId(?string $anonymousId): void;
}