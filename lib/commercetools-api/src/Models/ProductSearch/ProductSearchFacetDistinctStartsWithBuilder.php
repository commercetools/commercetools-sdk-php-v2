<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFacetDistinctStartsWith>
 */
final class ProductSearchFacetDistinctStartsWithBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $value;

    /**

     * @var ?bool
     */
    private $caseInsensitive;

    /**
     * <p>Text to match against the start of the target value.</p>
     *

     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p>If <code>true</code>, the <code>value</code> is not case sensitive.</p>
     *

     * @return null|bool
     */
    public function getCaseInsensitive()
    {
        return $this->caseInsensitive;
    }

    /**
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?bool $caseInsensitive
     * @return $this
     */
    public function withCaseInsensitive(?bool $caseInsensitive)
    {
        $this->caseInsensitive = $caseInsensitive;

        return $this;
    }


    public function build(): ProductSearchFacetDistinctStartsWith
    {
        return new ProductSearchFacetDistinctStartsWithModel(
            $this->value,
            $this->caseInsensitive
        );
    }

    public static function of(): ProductSearchFacetDistinctStartsWithBuilder
    {
        return new self();
    }
}
