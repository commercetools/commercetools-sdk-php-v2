<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryChangeSlugAction>
 */
final class CategoryChangeSlugActionBuilder implements Builder
{
    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $slug;

    /**
     * <p>Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.
     * Maximum size is {{ site.data.api-limits.slugLength }}.</p>.
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function build(): CategoryChangeSlugAction
    {
        return new CategoryChangeSlugActionModel(
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug)
        );
    }

    public static function of(): CategoryChangeSlugActionBuilder
    {
        return new self();
    }
}
