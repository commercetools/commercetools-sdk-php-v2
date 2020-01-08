<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditUpdate>
 */
final class OrderEditUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?OrderEditUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?bool
     */
    private $dryRun;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|OrderEditUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|bool
     */
    public function getDryRun()
    {
        return $this->dryRun;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?OrderEditUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDryRun(?bool $dryRun)
    {
        $this->dryRun = $dryRun;

        return $this;
    }

    public function build(): OrderEditUpdate
    {
        return new OrderEditUpdateModel(
            $this->version,
            $this->actions,
            $this->dryRun
        );
    }

    public static function of(): OrderEditUpdateBuilder
    {
        return new self();
    }
}
