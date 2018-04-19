<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Builder\CategoryUpdateBuilder;
use Commercetools\Types\Common\Asset;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\AssetCollection;
use Commercetools\Types\Common\Resource;

interface Category extends Resource
{
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ANCESTORS = 'ancestors';
    const FIELD_PARENT = 'parent';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_CUSTOM = 'custom';
    const FIELD_ASSETS = 'assets';
    const FIELD_KEY = 'key';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getSlug();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return CategoryReferenceCollection
     */
    public function getAncestors();

    /**
     * @return CategoryReference
     */
    public function getParent();

    /**
     * @return string
     */
    public function getOrderHint();

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @return LocalizedString
     */
    public function getMetaTitle();

    /**
     * @return LocalizedString
     */
    public function getMetaDescription();

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return AssetCollection
     */
    public function getAssets();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param CategoryReferenceCollection $ancestors
     * @return $this
     */
    public function setAncestors(CategoryReferenceCollection $ancestors);

    /**
     * @param CategoryReference $parent
     * @return $this
     */
    public function setParent(CategoryReference $parent);

    /**
     * @param string $orderHint
     * @return $this
     */
    public function setOrderHint(string $orderHint);

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId);

    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle);

    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription);

    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param AssetCollection $assets
     * @return $this
     */
    public function setAssets(AssetCollection $assets);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @return CategoryUpdateBuilder
     */
    public function update();
}
