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
 * @template T of GraphQLErrorObject
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method GraphQLErrorObject current()
 * @method GraphQLErrorObject end()
 * @method GraphQLErrorObject at($offset)
 */
class GraphQLErrorObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLErrorObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = GraphQLErrorObjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
