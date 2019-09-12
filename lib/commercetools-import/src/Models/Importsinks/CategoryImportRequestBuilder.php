<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

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
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>The individual categories to import.</p>.
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
