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
 * @extends GraphQLErrorObjectCollection<GraphQLEnumValueIsUsedError>
 * @method GraphQLEnumValueIsUsedError current()
 * @method GraphQLEnumValueIsUsedError end()
 * @method GraphQLEnumValueIsUsedError at($offset)
 */
class GraphQLEnumValueIsUsedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLEnumValueIsUsedError $value
     * @psalm-param GraphQLEnumValueIsUsedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLEnumValueIsUsedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLEnumValueIsUsedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLEnumValueIsUsedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLEnumValueIsUsedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLEnumValueIsUsedError $data */
                $data = GraphQLEnumValueIsUsedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
