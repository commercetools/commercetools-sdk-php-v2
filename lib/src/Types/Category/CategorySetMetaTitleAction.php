<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\LocalizedString;

interface CategorySetMetaTitleAction extends CategoryUpdateAction
{
    const FIELD_META_TITLE = 'metaTitle';

    /**
     * @return LocalizedString
     */
    public function getMetaTitle();

    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle);

}
