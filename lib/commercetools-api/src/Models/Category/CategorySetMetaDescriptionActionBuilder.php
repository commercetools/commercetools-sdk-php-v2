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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategorySetMetaDescriptionAction>
 */
final class CategorySetMetaDescriptionActionBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaDescription;

    /**
     * <p>Value to set.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * @param ?LocalizedString $metaDescription
     * @return $this
     */
    public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @deprecated use withMetaDescription() instead
     * @return $this
     */
    public function withMetaDescriptionBuilder(?LocalizedStringBuilder $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function build(): CategorySetMetaDescriptionAction
    {
        return new CategorySetMetaDescriptionActionModel(
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription
        );
    }

    public static function of(): CategorySetMetaDescriptionActionBuilder
    {
        return new self();
    }
}
