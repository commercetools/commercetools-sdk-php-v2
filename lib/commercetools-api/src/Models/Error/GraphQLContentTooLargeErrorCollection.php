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
 * @extends GraphQLErrorObjectCollection<GraphQLContentTooLargeError>
 * @method GraphQLContentTooLargeError current()
 * @method GraphQLContentTooLargeError end()
 * @method GraphQLContentTooLargeError at($offset)
 */
class GraphQLContentTooLargeErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLContentTooLargeError $value
     * @psalm-param GraphQLContentTooLargeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLContentTooLargeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLContentTooLargeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLContentTooLargeError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLContentTooLargeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLContentTooLargeError $data */
                $data = GraphQLContentTooLargeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
