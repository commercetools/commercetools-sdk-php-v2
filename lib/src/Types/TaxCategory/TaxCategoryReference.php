<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\Common\Reference;

interface TaxCategoryReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return TaxCategory
     */
    public function getObj();

    /**
     * @param TaxCategory $obj
     * @return $this
     */
    public function setObj(TaxCategory $obj);

}
