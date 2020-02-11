<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<CategoryChangeSlugAction>
 */
final class CategoryChangeSlugActionBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**
     * <p>Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.
     * Maximum size is  site.data.api-limits.slugLength .</p>
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
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug
        );
    }

    public static function of(): CategoryChangeSlugActionBuilder
    {
        return new self();
    }
}
