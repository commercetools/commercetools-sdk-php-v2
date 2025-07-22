<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\History\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLTooManyRequestsError>
 * @method GraphQLTooManyRequestsError current()
 * @method GraphQLTooManyRequestsError end()
 * @method GraphQLTooManyRequestsError at($offset)
 */
class GraphQLTooManyRequestsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLTooManyRequestsError $value
     * @psalm-param GraphQLTooManyRequestsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLTooManyRequestsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLTooManyRequestsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLTooManyRequestsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLTooManyRequestsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLTooManyRequestsError $data */
                $data = GraphQLTooManyRequestsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
