<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditApply>
 */
final class OrderEditApplyBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $resourceVersion;

    /**
     * @var ?int
     */
    private $editVersion;

    /**
     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * @return null|int
     */
    public function getEditVersion()
    {
        return $this->editVersion;
    }

    /**
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEditVersion(?int $editVersion)
    {
        $this->editVersion = $editVersion;

        return $this;
    }

    public function build(): OrderEditApply
    {
        return new OrderEditApplyModel(
            $this->resourceVersion,
            $this->editVersion
        );
    }

    public static function of(): OrderEditApplyBuilder
    {
        return new self();
    }
}
