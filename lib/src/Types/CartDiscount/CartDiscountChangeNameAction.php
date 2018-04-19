<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\Common\LocalizedString;

interface CartDiscountChangeNameAction extends CartDiscountUpdateAction
{
    const FIELD_NAME = 'name';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

}
