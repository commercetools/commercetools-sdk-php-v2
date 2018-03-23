<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class ProductSetMetaDescriptionActionModel extends ProductUpdateActionModel implements ProductSetMetaDescriptionAction {
    const DISCRIMINATOR_VALUE = 'setMetaDescription';

    /**
     * @var LocalizedString
     */
    protected $metaDescription;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw(ProductSetMetaDescriptionAction::FIELD_META_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaDescription = $value;
        }
        return $this->metaDescription;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductSetMetaDescriptionAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
