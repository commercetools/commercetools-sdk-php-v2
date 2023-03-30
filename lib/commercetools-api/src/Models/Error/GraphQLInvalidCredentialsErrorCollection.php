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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidCredentialsError>
 * @method GraphQLInvalidCredentialsError current()
 * @method GraphQLInvalidCredentialsError end()
 * @method GraphQLInvalidCredentialsError at($offset)
 */
class GraphQLInvalidCredentialsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidCredentialsError $value
     * @psalm-param GraphQLInvalidCredentialsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidCredentialsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidCredentialsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidCredentialsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidCredentialsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidCredentialsError $data */
                $data = GraphQLInvalidCredentialsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
