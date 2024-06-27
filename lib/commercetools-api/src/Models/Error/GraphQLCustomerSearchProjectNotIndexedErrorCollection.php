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
 * @extends GraphQLErrorObjectCollection<GraphQLCustomerSearchProjectNotIndexedError>
 * @method GraphQLCustomerSearchProjectNotIndexedError current()
 * @method GraphQLCustomerSearchProjectNotIndexedError end()
 * @method GraphQLCustomerSearchProjectNotIndexedError at($offset)
 */
class GraphQLCustomerSearchProjectNotIndexedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLCustomerSearchProjectNotIndexedError $value
     * @psalm-param GraphQLCustomerSearchProjectNotIndexedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLCustomerSearchProjectNotIndexedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLCustomerSearchProjectNotIndexedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLCustomerSearchProjectNotIndexedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLCustomerSearchProjectNotIndexedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLCustomerSearchProjectNotIndexedError $data */
                $data = GraphQLCustomerSearchProjectNotIndexedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
