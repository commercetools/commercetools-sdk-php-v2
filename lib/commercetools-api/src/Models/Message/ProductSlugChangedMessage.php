<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSlugChangedMessage extends Message
{
    public const FIELD_SLUG = 'slug';
    public const FIELD_OLD_SLUG = 'oldSlug';

    /**
     * <p>The slug of the <a href="ctp:api:type:Product">Product</a> after the <a href="ctp:api:type:ProductChangeSlugAction">Change Slug</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>The slug of the <a href="ctp:api:type:Product">Product</a> before the <a href="ctp:api:type:ProductChangeSlugAction">Change Slug</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getOldSlug();

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?LocalizedString $oldSlug
     */
    public function setOldSlug(?LocalizedString $oldSlug): void;
}
