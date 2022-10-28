<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\StandalonePrices\StandalonePriceImportCollection;
use stdClass;

/**
 * @implements Builder<StandalonePriceImportRequest>
 */
final class StandalonePriceImportRequestBuilder implements Builder
{
    /**

     * @var ?StandalonePriceImportCollection
     */
    private $resources;

    /**
     * <p>The Standalone Price import resources of this request.</p>
     *

     * @return null|StandalonePriceImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?StandalonePriceImportCollection $resources
     * @return $this
     */
    public function withResources(?StandalonePriceImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): StandalonePriceImportRequest
    {
        return new StandalonePriceImportRequestModel(
            $this->resources
        );
    }

    public static function of(): StandalonePriceImportRequestBuilder
    {
        return new self();
    }
}
