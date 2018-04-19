<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductSetMetaTitleAction extends ProductUpdateAction
{
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_STAGED = 'staged';

    /**
     * @return LocalizedString
     */
    public function getMetaTitle();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
