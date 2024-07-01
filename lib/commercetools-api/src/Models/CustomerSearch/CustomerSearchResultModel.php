<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSearchResultModel extends JsonObjectModel implements CustomerSearchResult
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?float
     */
    protected $relevance;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?float $relevance = null
    ) {
        $this->id = $id;
        $this->relevance = $relevance;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> matching the search query.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>How closely this customer matches the search query.</p>
     *
     *
     * @return null|float
     */
    public function getRelevance()
    {
        if (is_null($this->relevance)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_RELEVANCE);
            if (is_null($data)) {
                return null;
            }
            $this->relevance = (float) $data;
        }

        return $this->relevance;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?float $relevance
     */
    public function setRelevance(?float $relevance): void
    {
        $this->relevance = $relevance;
    }
}
