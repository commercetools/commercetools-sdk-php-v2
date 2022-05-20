<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceUpdate>
 */
final class StandalonePriceUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?StandalonePriceUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the StandalonePrice on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the StandalonePrice.</p>
     *
     * @return null|StandalonePriceUpdateActionCollection
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
     * @param ?StandalonePriceUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?StandalonePriceUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): StandalonePriceUpdate
    {
        return new StandalonePriceUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): StandalonePriceUpdateBuilder
    {
        return new self();
    }
}
