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
 * @extends GraphQLErrorObjectCollection<GraphQLRequiredFieldError>
 * @method GraphQLRequiredFieldError current()
 * @method GraphQLRequiredFieldError end()
 * @method GraphQLRequiredFieldError at($offset)
 */
class GraphQLRequiredFieldErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLRequiredFieldError $value
     * @psalm-param GraphQLRequiredFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLRequiredFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLRequiredFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLRequiredFieldError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLRequiredFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLRequiredFieldError $data */
                $data = GraphQLRequiredFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
