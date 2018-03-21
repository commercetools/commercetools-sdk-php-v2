<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductSetMetaDescriptionAction extends ProductUpdateAction {
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_STAGED = 'staged';

    /**
     * @return LocalizedString
     */
    public function getMetaDescription();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
