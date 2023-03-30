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
 * @extends GraphQLErrorObjectCollection<GraphQLSyntaxErrorError>
 * @method GraphQLSyntaxErrorError current()
 * @method GraphQLSyntaxErrorError end()
 * @method GraphQLSyntaxErrorError at($offset)
 */
class GraphQLSyntaxErrorErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSyntaxErrorError $value
     * @psalm-param GraphQLSyntaxErrorError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSyntaxErrorErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSyntaxErrorError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSyntaxErrorError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSyntaxErrorError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSyntaxErrorError $data */
                $data = GraphQLSyntaxErrorErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
