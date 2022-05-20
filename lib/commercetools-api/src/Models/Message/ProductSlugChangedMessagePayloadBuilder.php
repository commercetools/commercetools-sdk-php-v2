<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSlugChangedMessagePayload>
 */
final class ProductSlugChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $oldSlug;

    /**
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getOldSlug()
    {
        return $this->oldSlug instanceof LocalizedStringBuilder ? $this->oldSlug->build() : $this->oldSlug;
    }

    /**
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?LocalizedString $oldSlug
     * @return $this
     */
    public function withOldSlug(?LocalizedString $oldSlug)
    {
        $this->oldSlug = $oldSlug;

        return $this;
    }

    /**
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @deprecated use withOldSlug() instead
     * @return $this
     */
    public function withOldSlugBuilder(?LocalizedStringBuilder $oldSlug)
    {
        $this->oldSlug = $oldSlug;

        return $this;
    }

    public function build(): ProductSlugChangedMessagePayload
    {
        return new ProductSlugChangedMessagePayloadModel(
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->oldSlug instanceof LocalizedStringBuilder ? $this->oldSlug->build() : $this->oldSlug
        );
    }

    public static function of(): ProductSlugChangedMessagePayloadBuilder
    {
        return new self();
    }
}
