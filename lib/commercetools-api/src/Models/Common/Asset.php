<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Type\CustomFields;

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
     * @return null|string
     */
    public function getId();

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
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getKey();

    public function setId(?string $id): void;

    public function setSources(?AssetSourceCollection $sources): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setTags(?array $tags): void;

    public function setCustom(?CustomFields $custom): void;

    public function setKey(?string $key): void;
}
