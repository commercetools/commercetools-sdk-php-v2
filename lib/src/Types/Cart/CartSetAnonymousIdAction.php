<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetAnonymousIdAction extends CartUpdateAction
{
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * @return string
     */
    public function getAnonymousId();

    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId);

}
