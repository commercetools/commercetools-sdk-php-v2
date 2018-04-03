<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetAnonymousIdActionModel extends CartUpdateActionModel implements CartSetAnonymousIdAction {
    const DISCRIMINATOR_VALUE = 'setAnonymousId';

    /**
     * @var string
     */
    protected $anonymousId;

    /**
     * @return string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw(CartSetAnonymousIdAction::FIELD_ANONYMOUS_ID);
            $value = (string)$value;
            $this->anonymousId = $value;
        }
        return $this->anonymousId;
    }

    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId)
    {
        $this->anonymousId = (string)$anonymousId;

        return $this;
    }

}
