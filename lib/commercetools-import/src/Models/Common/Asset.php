<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;

interface Asset extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_SOURCES = 'sources';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TAGS = 'tags';

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

    public function setId(?string $id): void;

    public function setSources(?AssetSourceCollection $sources): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setTags(?array $tags): void;
}
