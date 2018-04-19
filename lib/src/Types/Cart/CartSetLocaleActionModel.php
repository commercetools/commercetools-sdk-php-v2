<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetLocaleActionModel extends CartUpdateActionModel implements CartSetLocaleAction
{
    const DISCRIMINATOR_VALUE = 'setLocale';

    /**
     * @var string
     */
    protected $locale;

    /**
     * @return string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            $value = $this->raw(CartSetLocaleAction::FIELD_LOCALE);
            $value = (string)$value;
            $this->locale = $value;
        }
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = (string)$locale;

        return $this;
    }

}
