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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidFieldError>
 * @method GraphQLInvalidFieldError current()
 * @method GraphQLInvalidFieldError end()
 * @method GraphQLInvalidFieldError at($offset)
 */
class GraphQLInvalidFieldErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidFieldError $value
     * @psalm-param GraphQLInvalidFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidFieldError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidFieldError $data */
                $data = GraphQLInvalidFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
