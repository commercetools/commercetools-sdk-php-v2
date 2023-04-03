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
 * @extends GraphQLErrorObjectCollection<GraphQLNotEnabledError>
 * @method GraphQLNotEnabledError current()
 * @method GraphQLNotEnabledError end()
 * @method GraphQLNotEnabledError at($offset)
 */
class GraphQLNotEnabledErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLNotEnabledError $value
     * @psalm-param GraphQLNotEnabledError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLNotEnabledErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLNotEnabledError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLNotEnabledError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLNotEnabledError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLNotEnabledError $data */
                $data = GraphQLNotEnabledErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
