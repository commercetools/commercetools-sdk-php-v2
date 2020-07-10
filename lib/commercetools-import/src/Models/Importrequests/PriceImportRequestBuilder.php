<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Prices\PriceImportCollection;

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
