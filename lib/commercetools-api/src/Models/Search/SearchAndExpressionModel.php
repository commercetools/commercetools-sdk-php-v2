<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchAndExpressionModel extends JsonObjectModel implements SearchAndExpression
{
    /**
     *
     * @var ?SearchQueryCollection
     */
    protected $and;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchQueryCollection $and = null
    ) {
        $this->and = $and;
    }

    /**
     *
     * @return null|SearchQueryCollection
     */
    public function getAnd()
    {
        if (is_null($this->and)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_AND);
            if (is_null($data)) {
                return null;
            }
            $this->and = SearchQueryCollection::fromArray($data);
        }

        return $this->and;
    }


    /**
     * @param ?SearchQueryCollection $and
     */
    public function setAnd(?SearchQueryCollection $and): void
    {
        $this->and = $and;
    }
}
