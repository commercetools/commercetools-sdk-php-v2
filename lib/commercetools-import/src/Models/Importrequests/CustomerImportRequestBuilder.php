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
use Commercetools\Import\Models\Customers\CustomerImportCollection;
use stdClass;

/**
 * @implements Builder<CustomerImportRequest>
 */
final class CustomerImportRequestBuilder implements Builder
{
    /**
     * @var ?CustomerImportCollection
     */
    private $resources;

    /**
     * <p>The customer import resources of this request.</p>
     *
     * @return null|CustomerImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?CustomerImportCollection $resources
     * @return $this
     */
    public function withResources(?CustomerImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): CustomerImportRequest
    {
        return new CustomerImportRequestModel(
            $this->resources
        );
    }

    public static function of(): CustomerImportRequestBuilder
    {
        return new self();
    }
}
