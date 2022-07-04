<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeUpdate>
 */
final class ProductTypeUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?ProductTypeUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the ProductType on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the ProductType.</p>
     *
     * @return null|ProductTypeUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?ProductTypeUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?ProductTypeUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): ProductTypeUpdate
    {
        return new ProductTypeUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ProductTypeUpdateBuilder
    {
        return new self();
    }
}
