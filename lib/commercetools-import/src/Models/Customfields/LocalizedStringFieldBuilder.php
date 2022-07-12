<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;
use stdClass;

/**
 * @implements Builder<LocalizedStringField>
 */
final class LocalizedStringFieldBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $value;

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
    public function getValue()
    {
        return $this->value instanceof LocalizedStringBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?LocalizedString $value
     * @return $this
     */
    public function withValue(?LocalizedString $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?LocalizedStringBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): LocalizedStringField
    {
        return new LocalizedStringFieldModel(
            $this->value instanceof LocalizedStringBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): LocalizedStringFieldBuilder
    {
        return new self();
    }
}
