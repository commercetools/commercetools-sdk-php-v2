<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartUpdate>
 */
final class CartUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?CartUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the Cart on which the changes apply.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the Cart.</p>
     *

     * @return null|CartUpdateActionCollection
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
     * @param ?CartUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?CartUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): CartUpdate
    {
        return new CartUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): CartUpdateBuilder
    {
        return new self();
    }
}
