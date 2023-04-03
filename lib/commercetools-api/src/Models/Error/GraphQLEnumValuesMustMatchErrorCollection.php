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
 * @extends GraphQLErrorObjectCollection<GraphQLEnumValuesMustMatchError>
 * @method GraphQLEnumValuesMustMatchError current()
 * @method GraphQLEnumValuesMustMatchError end()
 * @method GraphQLEnumValuesMustMatchError at($offset)
 */
class GraphQLEnumValuesMustMatchErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLEnumValuesMustMatchError $value
     * @psalm-param GraphQLEnumValuesMustMatchError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLEnumValuesMustMatchErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLEnumValuesMustMatchError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLEnumValuesMustMatchError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLEnumValuesMustMatchError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLEnumValuesMustMatchError $data */
                $data = GraphQLEnumValuesMustMatchErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
