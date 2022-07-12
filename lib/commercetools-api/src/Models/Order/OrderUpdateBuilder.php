<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderUpdate>
 */
final class OrderUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?OrderUpdateActionCollection
     */
    private $actions;

    /**

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**

     * @return null|OrderUpdateActionCollection
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
     * @param ?OrderUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?OrderUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): OrderUpdate
    {
        return new OrderUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): OrderUpdateBuilder
    {
        return new self();
    }
}
