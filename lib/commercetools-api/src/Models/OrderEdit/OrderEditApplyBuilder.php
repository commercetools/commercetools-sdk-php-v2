<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditApply>
 */
final class OrderEditApplyBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $editVersion;

    /**
     * @var ?int
     */
    private $resourceVersion;

    /**
     * @return null|int
     */
    public function getEditVersion()
    {
        return $this->editVersion;
    }

    /**
     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * @return $this
     */
    public function withEditVersion(?int $editVersion)
    {
        $this->editVersion = $editVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }


    public function build(): OrderEditApply
    {
        return new OrderEditApplyModel(
            $this->editVersion,
            $this->resourceVersion
        );
    }

    public static function of(): OrderEditApplyBuilder
    {
        return new self();
    }
}
