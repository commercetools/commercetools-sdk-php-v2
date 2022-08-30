<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

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
final class LocalizedStringFieldModel extends JsonObjectModel implements LocalizedStringField
{
    public const DISCRIMINATOR_VALUE = 'LocalizedString';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?LocalizedString
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $value = null,
        ?string $type = null
    ) {
        $this->value = $value;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     *
     * @return null|LocalizedString
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = LocalizedStringModel::of($data);
        }

        return $this->value;
    }


    /**
     * @param ?LocalizedString $value
     */
    public function setValue(?LocalizedString $value): void
    {
        $this->value = $value;
    }
}
