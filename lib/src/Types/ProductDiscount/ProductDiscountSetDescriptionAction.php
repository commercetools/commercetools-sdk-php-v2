<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\Common\LocalizedString;

interface ProductDiscountSetDescriptionAction extends ProductDiscountUpdateAction
{
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
