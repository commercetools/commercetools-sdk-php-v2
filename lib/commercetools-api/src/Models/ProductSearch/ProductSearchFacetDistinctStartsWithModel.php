<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetDistinctStartsWithModel extends JsonObjectModel implements ProductSearchFacetDistinctStartsWith
{
    /**
     *
     * @var ?string
     */
    protected $value;

    /**
     *
     * @var ?bool
     */
    protected $caseInsensitive;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $value = null,
        ?bool $caseInsensitive = null
    ) {
        $this->value = $value;
        $this->caseInsensitive = $caseInsensitive;
    }

    /**
     * <p>Text to match against the start of the target value.</p>
     *
     *
     * @return null|string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (string) $data;
        }

        return $this->value;
    }

    /**
     * <p>If <code>true</code>, the <code>value</code> is not case sensitive.</p>
     *
     *
     * @return null|bool
     */
    public function getCaseInsensitive()
    {
        if (is_null($this->caseInsensitive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_CASE_INSENSITIVE);
            if (is_null($data)) {
                return null;
            }
            $this->caseInsensitive = (bool) $data;
        }

        return $this->caseInsensitive;
    }


    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?bool $caseInsensitive
     */
    public function setCaseInsensitive(?bool $caseInsensitive): void
    {
        $this->caseInsensitive = $caseInsensitive;
    }
}
