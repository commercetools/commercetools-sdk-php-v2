<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyPaymentUpdate>
 */
final class MyPaymentUpdateBuilder implements Builder
{
    /**
     * @var ?MyPaymentUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|MyPaymentUpdateActionCollection
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
    public function withActions(?MyPaymentUpdateActionCollection $actions)
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

    public function build(): MyPaymentUpdate
    {
        return new MyPaymentUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): MyPaymentUpdateBuilder
    {
        return new self();
    }
}
