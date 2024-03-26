<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchQueryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetCountValueModel extends JsonObjectModel implements ProductSearchFacetCountValue
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $scope;

    /**
     *
     * @var ?SearchQuery
     */
    protected $filter;

    /**
     *
     * @var ?string
     */
    protected $level;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $scope = null,
        ?SearchQuery $filter = null,
        ?string $level = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->filter = $filter;
        $this->level = $level;
    }

    /**
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Whether the facet must consider only the Products resulting from the search (<code>query</code>) or all the Products (<code>all</code>).</p>
     *
     *
     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

        return $this->scope;
    }

    /**
     * <p>Additional filtering expression to apply to the search result before calculating the facet.</p>
     *
     *
     * @return null|SearchQuery
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->filter = SearchQueryModel::of($data);
        }

        return $this->filter;
    }

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *
     *
     * @return null|string
     */
    public function getLevel()
    {
        if (is_null($this->level)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LEVEL);
            if (is_null($data)) {
                return null;
            }
            $this->level = (string) $data;
        }

        return $this->level;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param ?SearchQuery $filter
     */
    public function setFilter(?SearchQuery $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * @param ?string $level
     */
    public function setLevel(?string $level): void
    {
        $this->level = $level;
    }
}
