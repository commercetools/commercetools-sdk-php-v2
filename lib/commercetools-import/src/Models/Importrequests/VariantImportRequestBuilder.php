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
use Commercetools\Import\Models\Variants\VariantImportCollection;
use stdClass;

/**
 * @implements Builder<VariantImportRequest>
 */
final class VariantImportRequestBuilder implements Builder
{
    /**

     * @var ?VariantImportCollection
     */
    private $resources;

    /**
     * <p>The Variant import resources of this request.</p>
     *

     * @return null|VariantImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?VariantImportCollection $resources
     * @return $this
     */
    public function withResources(?VariantImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): VariantImportRequest
    {
        return new VariantImportRequestModel(
            $this->resources
        );
    }

    public static function of(): VariantImportRequestBuilder
    {
        return new self();
    }
}
