<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class TaxCategoryReferenceModel extends ReferenceModel implements TaxCategoryReference {
    const DISCRIMINATOR_VALUE = 'tax-category';

    /**
     * @var TaxCategory
     */
    protected $obj;

    /**
     * @return TaxCategory
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(TaxCategoryReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(TaxCategory::class, null);
            }
            $value = $this->mapData(TaxCategory::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param TaxCategory $obj
     * @return $this
     */
    public function setObj(TaxCategory $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
