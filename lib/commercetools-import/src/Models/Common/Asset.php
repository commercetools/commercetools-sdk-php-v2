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
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|array
     */
    public function getTags();

    /**
     * <p>The representation to be sent to the server when creating a resource with custom fields.</p>
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
