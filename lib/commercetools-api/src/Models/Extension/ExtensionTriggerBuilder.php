<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionTrigger>
 */
final class ExtensionTriggerBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $resourceTypeId;

    /**
     * @var ?array
     */
    private $actions;

    /**
     * @return null|string
     */
    public function getResourceTypeId()
    {
        return $this->resourceTypeId;
    }

    /**
     * @return null|array
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?array $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): ExtensionTrigger
    {
        return new ExtensionTriggerModel(
            $this->resourceTypeId,
            $this->actions
        );
    }

    public static function of(): ExtensionTriggerBuilder
    {
        return new self();
    }
}
