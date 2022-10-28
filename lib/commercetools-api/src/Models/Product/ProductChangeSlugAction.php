<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductChangeSlugAction extends ProductUpdateAction
{
    public const FIELD_SLUG = 'slug';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Value to set. Must not be empty. A Product can have the same slug for different <a href="ctp:api:type:Locale">Locales</a>, but it must be unique across the <a href="ctp:api:type:Project">Project</a>. Must match the pattern <code>^[A-Za-z0-9_-]{2,256}+$</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>If <code>true</code>, only the staged <code>slug</code> is updated. If <code>false</code>, both the current and staged <code>slug</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
