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
final class SearchOrExpressionModel extends JsonObjectModel implements SearchOrExpression
{
    /**
     *
     * @var ?SearchQueryCollection
     */
    protected $or;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchQueryCollection $or = null
    ) {
        $this->or = $or;
    }

    /**
     *
     * @return null|SearchQueryCollection
     */
    public function getOr()
    {
        if (is_null($this->or)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OR);
            if (is_null($data)) {
                return null;
            }
            $this->or = SearchQueryCollection::fromArray($data);
        }

        return $this->or;
    }


    /**
     * @param ?SearchQueryCollection $or
     */
    public function setOr(?SearchQueryCollection $or): void
    {
        $this->or = $or;
    }
}
