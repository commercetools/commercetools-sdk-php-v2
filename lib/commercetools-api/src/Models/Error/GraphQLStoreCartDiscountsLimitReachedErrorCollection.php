<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLStoreCartDiscountsLimitReachedError>
 * @method GraphQLStoreCartDiscountsLimitReachedError current()
 * @method GraphQLStoreCartDiscountsLimitReachedError end()
 * @method GraphQLStoreCartDiscountsLimitReachedError at($offset)
 */
class GraphQLStoreCartDiscountsLimitReachedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLStoreCartDiscountsLimitReachedError $value
     * @psalm-param GraphQLStoreCartDiscountsLimitReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLStoreCartDiscountsLimitReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLStoreCartDiscountsLimitReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLStoreCartDiscountsLimitReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLStoreCartDiscountsLimitReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLStoreCartDiscountsLimitReachedError $data */
                $data = GraphQLStoreCartDiscountsLimitReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
