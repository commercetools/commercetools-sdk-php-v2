<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Customfields\Custom;

interface Asset extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_SOURCES = 'sources';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_TAGS = 'tags';
    public const FIELD_CUSTOM = 'custom';

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

     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
