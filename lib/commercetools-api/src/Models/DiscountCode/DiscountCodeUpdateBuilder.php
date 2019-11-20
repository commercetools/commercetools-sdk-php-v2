<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeUpdate>
 */
final class DiscountCodeUpdateBuilder implements Builder
{
    /**
     * @var ?DiscountCodeUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|DiscountCodeUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?DiscountCodeUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): DiscountCodeUpdate
    {
        return new DiscountCodeUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): DiscountCodeUpdateBuilder
    {
        return new self();
    }
}
