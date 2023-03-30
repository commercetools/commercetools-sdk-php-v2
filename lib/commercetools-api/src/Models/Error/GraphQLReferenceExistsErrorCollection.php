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
 * @extends GraphQLErrorObjectCollection<GraphQLReferenceExistsError>
 * @method GraphQLReferenceExistsError current()
 * @method GraphQLReferenceExistsError end()
 * @method GraphQLReferenceExistsError at($offset)
 */
class GraphQLReferenceExistsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLReferenceExistsError $value
     * @psalm-param GraphQLReferenceExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLReferenceExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLReferenceExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLReferenceExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLReferenceExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLReferenceExistsError $data */
                $data = GraphQLReferenceExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
