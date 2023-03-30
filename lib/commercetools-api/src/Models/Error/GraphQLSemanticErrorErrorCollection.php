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
 * @extends GraphQLErrorObjectCollection<GraphQLSemanticErrorError>
 * @method GraphQLSemanticErrorError current()
 * @method GraphQLSemanticErrorError end()
 * @method GraphQLSemanticErrorError at($offset)
 */
class GraphQLSemanticErrorErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSemanticErrorError $value
     * @psalm-param GraphQLSemanticErrorError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSemanticErrorErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSemanticErrorError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSemanticErrorError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSemanticErrorError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSemanticErrorError $data */
                $data = GraphQLSemanticErrorErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
