<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GraphQLErrorObject>
 * @method GraphQLErrorObject current()
 * @method GraphQLErrorObject end()
 * @method GraphQLErrorObject at($offset)
 */
class GraphQLErrorObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert GraphQLErrorObject $value
     * @psalm-param GraphQLErrorObject|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLErrorObjectCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLErrorObject) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLErrorObject
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLErrorObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLErrorObject $data */
                $data = GraphQLErrorObjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
