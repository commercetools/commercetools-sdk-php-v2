<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssetDraft extends JsonObject
{
    public const FIELD_SOURCES = 'sources';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_TAGS = 'tags';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_KEY = 'key';

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|array
     */
    public function getTags();

    /**
     * <p>The representation used when creating or updating a <a href="/../api/projects/types#list-of-customizable-data-types">customizable data type</a> with Custom Fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?AssetSourceCollection $sources
     */
    public function setSources(?AssetSourceCollection $sources): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?array $tags
     */
    public function setTags(?array $tags): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
