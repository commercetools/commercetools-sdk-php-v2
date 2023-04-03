<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductAssignmentMissingError>
 */
final class ProductAssignmentMissingErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**
     * <p>For Product Selection of type Individual, the message is:</p>
     * <p><code>&quot;A Product Variant Selection can only be set for a Product that has previously been added to the Product Selection.&quot;</code></p>
     * <p>For Product Selection of type Individual Exclusion, the message is:</p>
     * <p><code>&quot;A Variant Exclusion can only be set for a Product that has previously been added to the Product Selection of type Individual Exclusion.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Product">Product</a> for which the error was returned.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?ProductReference $product
     * @return $this
     */
    public function withProduct(?ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): ProductAssignmentMissingError
    {
        return new ProductAssignmentMissingErrorModel(
            $this->message,
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): ProductAssignmentMissingErrorBuilder
    {
        return new self();
    }
}
