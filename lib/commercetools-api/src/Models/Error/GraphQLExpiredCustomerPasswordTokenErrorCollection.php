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
 * @extends GraphQLErrorObjectCollection<GraphQLExpiredCustomerPasswordTokenError>
 * @method GraphQLExpiredCustomerPasswordTokenError current()
 * @method GraphQLExpiredCustomerPasswordTokenError end()
 * @method GraphQLExpiredCustomerPasswordTokenError at($offset)
 */
class GraphQLExpiredCustomerPasswordTokenErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExpiredCustomerPasswordTokenError $value
     * @psalm-param GraphQLExpiredCustomerPasswordTokenError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExpiredCustomerPasswordTokenErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExpiredCustomerPasswordTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExpiredCustomerPasswordTokenError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExpiredCustomerPasswordTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExpiredCustomerPasswordTokenError $data */
                $data = GraphQLExpiredCustomerPasswordTokenErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
