<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class ProductSetMetaKeywordsActionModel extends ProductUpdateActionModel implements ProductSetMetaKeywordsAction
{
    const DISCRIMINATOR_VALUE = 'setMetaKeywords';

    /**
     * @var LocalizedString
     */
    protected $metaKeywords;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw(ProductSetMetaKeywordsAction::FIELD_META_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaKeywords = $value;
        }
        return $this->metaKeywords;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductSetMetaKeywordsAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

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
