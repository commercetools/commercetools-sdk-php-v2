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
 * @extends GraphQLErrorObjectCollection<GraphQLExpiredCustomerEmailTokenError>
 * @method GraphQLExpiredCustomerEmailTokenError current()
 * @method GraphQLExpiredCustomerEmailTokenError end()
 * @method GraphQLExpiredCustomerEmailTokenError at($offset)
 */
class GraphQLExpiredCustomerEmailTokenErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExpiredCustomerEmailTokenError $value
     * @psalm-param GraphQLExpiredCustomerEmailTokenError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExpiredCustomerEmailTokenErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExpiredCustomerEmailTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExpiredCustomerEmailTokenError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExpiredCustomerEmailTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExpiredCustomerEmailTokenError $data */
                $data = GraphQLExpiredCustomerEmailTokenErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
