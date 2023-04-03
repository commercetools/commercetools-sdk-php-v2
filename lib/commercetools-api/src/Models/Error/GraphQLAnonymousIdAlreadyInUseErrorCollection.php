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
 * @extends GraphQLErrorObjectCollection<GraphQLAnonymousIdAlreadyInUseError>
 * @method GraphQLAnonymousIdAlreadyInUseError current()
 * @method GraphQLAnonymousIdAlreadyInUseError end()
 * @method GraphQLAnonymousIdAlreadyInUseError at($offset)
 */
class GraphQLAnonymousIdAlreadyInUseErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAnonymousIdAlreadyInUseError $value
     * @psalm-param GraphQLAnonymousIdAlreadyInUseError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAnonymousIdAlreadyInUseErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAnonymousIdAlreadyInUseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAnonymousIdAlreadyInUseError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAnonymousIdAlreadyInUseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAnonymousIdAlreadyInUseError $data */
                $data = GraphQLAnonymousIdAlreadyInUseErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
