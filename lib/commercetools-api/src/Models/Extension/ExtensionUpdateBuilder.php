<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionUpdate>
 */
final class ExtensionUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?ExtensionUpdateActionCollection
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
     * @return null|ExtensionUpdateActionCollection
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
    public function withActions(?ExtensionUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): ExtensionUpdate
    {
        return new ExtensionUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ExtensionUpdateBuilder
    {
        return new self();
    }
}
