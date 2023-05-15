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
use Commercetools\Import\Models\Types\TypeImportCollection;
use stdClass;

/**
 * @implements Builder<TypeImportRequest>
 */
final class TypeImportRequestBuilder implements Builder
{
    /**

     * @var ?TypeImportCollection
     */
    private $resources;

    /**
     * <p>The type import resources of this request.</p>
     *

     * @return null|TypeImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?TypeImportCollection $resources
     * @return $this
     */
    public function withResources(?TypeImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): TypeImportRequest
    {
        return new TypeImportRequestModel(
            $this->resources
        );
    }

    public static function of(): TypeImportRequestBuilder
    {
        return new self();
    }
}
