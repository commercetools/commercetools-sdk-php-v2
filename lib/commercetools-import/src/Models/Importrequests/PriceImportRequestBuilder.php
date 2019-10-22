<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Prices\PriceImportCollection;

/**
 * @implements Builder<PriceImportRequest>
 */
final class PriceImportRequestBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?PriceImportCollection
     */
    private $resources;

    public function __construct()
    {
    }

    /**
     * <p>The type of the import resource.</p>.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>The price import resources of this request.</p>.
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
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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
            $this->type,
            $this->resources
        );
    }

    public static function of(): PriceImportRequestBuilder
    {
        return new self();
    }
}
