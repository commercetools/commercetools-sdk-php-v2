<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductChangeSlugAction extends ProductUpdateAction {
    const FIELD_SLUG = 'slug';
    const FIELD_STAGED = 'staged';

    /**
     * @return LocalizedString
     */
    public function getSlug();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
