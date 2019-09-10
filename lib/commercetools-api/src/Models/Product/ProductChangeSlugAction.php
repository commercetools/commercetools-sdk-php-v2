<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;

interface ProductChangeSlugAction extends ProductUpdateAction
{
    const FIELD_SLUG = 'slug';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setSlug(?LocalizedString $slug): void;

    public function setStaged(?bool $staged): void;
}
