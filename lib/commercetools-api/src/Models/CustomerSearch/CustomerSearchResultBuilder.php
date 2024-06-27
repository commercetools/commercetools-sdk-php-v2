<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSearchResult>
 */
final class CustomerSearchResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?float
     */
    private $relevance;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> matching the search query.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>How closely this customer matches the search query.</p>
     *

     * @return null|float
     */
    public function getRelevance()
    {
        return $this->relevance;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?float $relevance
     * @return $this
     */
    public function withRelevance(?float $relevance)
    {
        $this->relevance = $relevance;

        return $this;
    }


    public function build(): CustomerSearchResult
    {
        return new CustomerSearchResultModel(
            $this->id,
            $this->relevance
        );
    }

    public static function of(): CustomerSearchResultBuilder
    {
        return new self();
    }
}
