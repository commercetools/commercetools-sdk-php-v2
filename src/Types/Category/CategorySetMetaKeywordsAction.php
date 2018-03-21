<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\LocalizedString;

interface CategorySetMetaKeywordsAction extends CategoryUpdateAction {
    const FIELD_META_KEYWORDS = 'metaKeywords';

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords);

}
