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
     * <p>Every slug must be unique across a project, but a product can have the same slug for different languages.
     * Allowed are alphabetic, numeric, underscore (<code>_</code>) and hyphen (<code>-</code>) characters.
     * Maximum size is <code>256</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
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
