<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductSetMetaKeywordsAction extends ProductUpdateAction
{
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_STAGED = 'staged';

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
