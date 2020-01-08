<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeUpdate>
 */
final class TypeUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?TypeUpdateActionCollection
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
     * @return null|TypeUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
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
    public function withActions(?TypeUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): TypeUpdate
    {
        return new TypeUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): TypeUpdateBuilder
    {
        return new self();
    }
}
