<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Categories\CategoryImportCollection;

/**
 * @implements Builder<CategoryImportRequest>
 */
final class CategoryImportRequestBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?CategoryImportCollection
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
     * <p>The category import resources of this request.</p>.
     *
     * @return null|CategoryImportCollection
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
    public function withResources(?CategoryImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    public function build(): CategoryImportRequest
    {
        return new CategoryImportRequestModel(
            $this->type,
            $this->resources
        );
    }

    public static function of(): CategoryImportRequestBuilder
    {
        return new self();
    }
}
