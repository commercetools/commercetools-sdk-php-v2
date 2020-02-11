<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Asset extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_SOURCES = 'sources';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_TAGS = 'tags';

    /**
     * <p>User-defined identifier for the asset.
     * Asset keys are unique inside their container (a product variant or a category).</p>
     *
     * @return null|string
     */
    public function getKey();

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

    public function setKey(?string $key): void;

    public function setSources(?AssetSourceCollection $sources): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setTags(?array $tags): void;
}
