<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Asset extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SOURCES = 'sources';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_TAGS = 'tags';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_KEY = 'key';

    /**
     * <p>Platform-generated unique identifier of the Asset.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources();

    /**
     * <p>Name of the Asset.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the Asset.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Keywords for categorizing and organizing Assets.</p>
     *
     * @return null|array
     */
    public function getTags();

    /**
     * <p>Custom Fields defined for the Asset.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>User-defined unique identifier of the Asset.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
