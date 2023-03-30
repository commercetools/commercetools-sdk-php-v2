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
 * @extends GraphQLErrorObjectCollection<GraphQLBadGatewayError>
 * @method GraphQLBadGatewayError current()
 * @method GraphQLBadGatewayError end()
 * @method GraphQLBadGatewayError at($offset)
 */
class GraphQLBadGatewayErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLBadGatewayError $value
     * @psalm-param GraphQLBadGatewayError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLBadGatewayErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLBadGatewayError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLBadGatewayError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLBadGatewayError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLBadGatewayError $data */
                $data = GraphQLBadGatewayErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
