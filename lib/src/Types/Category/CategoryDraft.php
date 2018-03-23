<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\AssetDraft;
use Commercetools\Types\Common\AssetDraftCollection;

interface CategoryDraft extends JsonObject {
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_DESCRIPTION = 'description';
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
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return AssetDraftCollection
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
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param AssetDraftCollection $assets
     * @return $this
     */
    public function setAssets(AssetDraftCollection $assets);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}
