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
 * @implements Builder<ProductSearchSuggestionCompletionExpressionValue>
 */
final class ProductSearchSuggestionCompletionExpressionValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?string
     */
    private $prefix;

    /**

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**

     * @return null|string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param ?string $prefix
     * @return $this
     */
    public function withPrefix(?string $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }


    public function build(): ProductSearchSuggestionCompletionExpressionValue
    {
        return new ProductSearchSuggestionCompletionExpressionValueModel(
            $this->name,
            $this->field,
            $this->prefix
        );
    }

    public static function of(): ProductSearchSuggestionCompletionExpressionValueBuilder
    {
        return new self();
    }
}
