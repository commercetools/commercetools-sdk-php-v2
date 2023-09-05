<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StandalonePrice\StagedStandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StagedStandalonePriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceStagedChangesRemovedMessagePayload>
 */
final class StandalonePriceStagedChangesRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|StagedStandalonePrice|StagedStandalonePriceBuilder
     */
    private $stagedChanges;

    /**
     * <p>Removed changes of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> after the <a href="ctp:api:type:StandalonePriceRemoveStagedChangesAction">Remove Staged Changes</a> update action.</p>
     *

     * @return null|StagedStandalonePrice
     */
    public function getStagedChanges()
    {
        return $this->stagedChanges instanceof StagedStandalonePriceBuilder ? $this->stagedChanges->build() : $this->stagedChanges;
    }

    /**
     * @param ?StagedStandalonePrice $stagedChanges
     * @return $this
     */
    public function withStagedChanges(?StagedStandalonePrice $stagedChanges)
    {
        $this->stagedChanges = $stagedChanges;

        return $this;
    }

    /**
     * @deprecated use withStagedChanges() instead
     * @return $this
     */
    public function withStagedChangesBuilder(?StagedStandalonePriceBuilder $stagedChanges)
    {
        $this->stagedChanges = $stagedChanges;

        return $this;
    }

    public function build(): StandalonePriceStagedChangesRemovedMessagePayload
    {
        return new StandalonePriceStagedChangesRemovedMessagePayloadModel(
            $this->stagedChanges instanceof StagedStandalonePriceBuilder ? $this->stagedChanges->build() : $this->stagedChanges
        );
    }

    public static function of(): StandalonePriceStagedChangesRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
