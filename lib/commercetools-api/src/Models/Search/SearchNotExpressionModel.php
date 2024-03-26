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
final class SearchNotExpressionModel extends JsonObjectModel implements SearchNotExpression
{
    /**
     *
     * @var ?SearchQueryCollection
     */
    protected $not;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchQueryCollection $not = null
    ) {
        $this->not = $not;
    }

    /**
     *
     * @return null|SearchQueryCollection
     */
    public function getNot()
    {
        if (is_null($this->not)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NOT);
            if (is_null($data)) {
                return null;
            }
            $this->not = SearchQueryCollection::fromArray($data);
        }

        return $this->not;
    }


    /**
     * @param ?SearchQueryCollection $not
     */
    public function setNot(?SearchQueryCollection $not): void
    {
        $this->not = $not;
    }
}
