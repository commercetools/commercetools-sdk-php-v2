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
use Commercetools\Import\Models\DiscountCodes\DiscountCodeImportCollection;
use stdClass;

/**
 * @implements Builder<DiscountCodeImportRequest>
 */
final class DiscountCodeImportRequestBuilder implements Builder
{
    /**

     * @var ?DiscountCodeImportCollection
     */
    private $resources;

    /**
     * <p>The Discount Code import resources of this request.</p>
     *

     * @return null|DiscountCodeImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?DiscountCodeImportCollection $resources
     * @return $this
     */
    public function withResources(?DiscountCodeImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): DiscountCodeImportRequest
    {
        return new DiscountCodeImportRequestModel(
            $this->resources
        );
    }

    public static function of(): DiscountCodeImportRequestBuilder
    {
        return new self();
    }
}
