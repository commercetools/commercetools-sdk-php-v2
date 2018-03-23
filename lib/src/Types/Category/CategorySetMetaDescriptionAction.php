<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\LocalizedString;

interface CategorySetMetaDescriptionAction extends CategoryUpdateAction {
    const FIELD_META_DESCRIPTION = 'metaDescription';

    /**
     * @return LocalizedString
     */
    public function getMetaDescription();

    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription);

}
