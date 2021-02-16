<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use stdClass;

/**
 * @internal
 */
final class AttributeLocalizedEnumValueModel extends JsonObjectModel implements AttributeLocalizedEnumValue
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $label;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $label = null
    ) {
        $this->key = $key;
        $this->label = $label;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

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
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }
}
