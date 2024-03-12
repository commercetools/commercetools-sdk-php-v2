<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryDraft>
 */
final class CategoryDraftBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var null|CategoryResourceIdentifier|CategoryResourceIdentifierBuilder
     */
    private $parent;

    /**

     * @var ?string
     */
    private $orderHint;

    /**

     * @var ?string
     */
    private $externalId;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaTitle;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaDescription;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaKeywords;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**

     * @var ?AssetDraftCollection
     */
    private $assets;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Name of the Category.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>User-defined identifier used as a deep-link URL to the related Category.
     * A Category can have the same slug for different <a href="ctp:api:type:Locale">Locales</a>, but it must be unique across the <a href="ctp:api:type:Project">Project</a>.
     * Valid slugs must match the pattern <code>^[A-Za-z0-9_-]{2,256}+$</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>Description of the Category.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Parent Category of the Category.
     * The parent can be set by its <code>id</code> or <code>key</code>.</p>
     *

     * @return null|CategoryResourceIdentifier
     */
    public function getParent()
    {
        return $this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent;
    }

    /**
     * <p>Decimal value between 0 and 1. Frontend applications can use this value for ordering Categories within the same level in the category tree.
     * If not set, a random value will be assigned.</p>
     *

     * @return null|string
     */
    public function getOrderHint()
    {
        return $this->orderHint;
    }

    /**
     * <p>Additional identifier for external systems like customer relationship management (CRM) or enterprise resource planning (ERP).</p>
     *

     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>Name of the Category used by external search engines for improved search engine performance.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

    /**
     * <p>Description of the Category used by external search engines for improved search engine performance.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

    /**
     * <p>Keywords related to the Category for improved search engine performance.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * <p>Custom Fields for the Category.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Media related to the Category.</p>
     *

     * @return null|AssetDraftCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>User-defined unique identifier for the Category.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
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
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?CategoryResourceIdentifier $parent
     * @return $this
     */
    public function withParent(?CategoryResourceIdentifier $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @param ?string $orderHint
     * @return $this
     */
    public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;

        return $this;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaTitle
     * @return $this
     */
    public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
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
     * @param ?LocalizedString $metaKeywords
     * @return $this
     */
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?AssetDraftCollection $assets
     * @return $this
     */
    public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

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
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withParent() instead
     * @return $this
     */
    public function withParentBuilder(?CategoryResourceIdentifierBuilder $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @deprecated use withMetaTitle() instead
     * @return $this
     */
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

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

    /**
     * @deprecated use withMetaKeywords() instead
     * @return $this
     */
    public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CategoryDraft
    {
        return new CategoryDraftModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent,
            $this->orderHint,
            $this->externalId,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->assets,
            $this->key
        );
    }

    public static function of(): CategoryDraftBuilder
    {
        return new self();
    }
}
