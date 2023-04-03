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
 * @extends GraphQLErrorObjectCollection<GraphQLGeneralError>
 * @method GraphQLGeneralError current()
 * @method GraphQLGeneralError end()
 * @method GraphQLGeneralError at($offset)
 */
class GraphQLGeneralErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLGeneralError $value
     * @psalm-param GraphQLGeneralError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLGeneralErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLGeneralError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLGeneralError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLGeneralError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLGeneralError $data */
                $data = GraphQLGeneralErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
