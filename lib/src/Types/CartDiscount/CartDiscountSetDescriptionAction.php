<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\Common\LocalizedString;

interface CartDiscountSetDescriptionAction extends CartDiscountUpdateAction {
    const FIELD_DESCRIPTION = 'description';

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

}
