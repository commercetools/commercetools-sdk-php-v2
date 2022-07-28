<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPublishAction>
 */
final class ProductPublishActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $scope;

    /**
     * <p><code>All</code> or <code>Prices</code></p>
     *

     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param ?string $scope
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }


    public function build(): ProductPublishAction
    {
        return new ProductPublishActionModel(
            $this->scope
        );
    }

    public static function of(): ProductPublishActionBuilder
    {
        return new self();
    }
}
