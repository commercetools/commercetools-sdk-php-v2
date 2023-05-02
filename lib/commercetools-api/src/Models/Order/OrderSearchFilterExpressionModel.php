<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSearchFilterExpressionModel extends JsonObjectModel implements OrderSearchFilterExpression
{
    /**
     *
     * @var ?OrderSearchQueryExpressionCollection
     */
    protected $filter;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchQueryExpressionCollection $filter = null
    ) {
        $this->filter = $filter;
    }

    /**
     *
     * @return null|OrderSearchQueryExpressionCollection
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }
            $this->filter = OrderSearchQueryExpressionCollection::fromArray($data);
        }

        return $this->filter;
    }


    /**
     * @param ?OrderSearchQueryExpressionCollection $filter
     */
    public function setFilter(?OrderSearchQueryExpressionCollection $filter): void
    {
        $this->filter = $filter;
    }
}
