<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryChangeSlugAction extends CategoryUpdateAction
{
    public const FIELD_SLUG = 'slug';

    /**
     * <p>New value to set. Must not be empty.
     * A Category can have the same slug for different <a href="ctp:api:type:Locale">Locales</a>, but it must be unique across the <a href="ctp:api:type:Project">Project</a>.
     * Valid slugs must match the pattern <code>^[A-Za-z0-9_-]{2,256}+$</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;
}
