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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateFieldError>
 * @method GraphQLDuplicateFieldError current()
 * @method GraphQLDuplicateFieldError end()
 * @method GraphQLDuplicateFieldError at($offset)
 */
class GraphQLDuplicateFieldErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateFieldError $value
     * @psalm-param GraphQLDuplicateFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateFieldError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateFieldError $data */
                $data = GraphQLDuplicateFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
