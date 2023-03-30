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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidSubjectError>
 * @method GraphQLInvalidSubjectError current()
 * @method GraphQLInvalidSubjectError end()
 * @method GraphQLInvalidSubjectError at($offset)
 */
class GraphQLInvalidSubjectErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidSubjectError $value
     * @psalm-param GraphQLInvalidSubjectError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidSubjectErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidSubjectError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidSubjectError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidSubjectError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidSubjectError $data */
                $data = GraphQLInvalidSubjectErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
