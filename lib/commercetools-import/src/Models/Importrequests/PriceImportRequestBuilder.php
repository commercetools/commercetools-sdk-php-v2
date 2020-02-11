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
use stdClass;
use Commercetools\Import\Models\Prices\PriceImportCollection;

/**
 * @implements Builder<PriceImportRequest>
 */
final class PriceImportRequestBuilder implements Builder
{
    /**
     * @var ?PriceImportCollection
     */
    private $resources;

    /**
     * <p>The price import resources of this request.</p>
     *
     * @return null|PriceImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @return $this
     */
    public function withResources(?PriceImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): PriceImportRequest
    {
        return new PriceImportRequestModel(
            $this->resources
        );
    }

    public static function of(): PriceImportRequestBuilder
    {
        return new self();
    }
}
