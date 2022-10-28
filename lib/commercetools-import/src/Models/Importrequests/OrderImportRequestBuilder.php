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
use Commercetools\Import\Models\Orders\OrderImportCollection;
use stdClass;

/**
 * @implements Builder<OrderImportRequest>
 */
final class OrderImportRequestBuilder implements Builder
{
    /**

     * @var ?OrderImportCollection
     */
    private $resources;

    /**
     * <p>The order import resources of this request.</p>
     *

     * @return null|OrderImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?OrderImportCollection $resources
     * @return $this
     */
    public function withResources(?OrderImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): OrderImportRequest
    {
        return new OrderImportRequestModel(
            $this->resources
        );
    }

    public static function of(): OrderImportRequestBuilder
    {
        return new self();
    }
}
