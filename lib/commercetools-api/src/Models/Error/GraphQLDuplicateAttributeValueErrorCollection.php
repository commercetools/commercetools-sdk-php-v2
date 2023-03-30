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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateAttributeValueError>
 * @method GraphQLDuplicateAttributeValueError current()
 * @method GraphQLDuplicateAttributeValueError end()
 * @method GraphQLDuplicateAttributeValueError at($offset)
 */
class GraphQLDuplicateAttributeValueErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateAttributeValueError $value
     * @psalm-param GraphQLDuplicateAttributeValueError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateAttributeValueErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateAttributeValueError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateAttributeValueError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateAttributeValueError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateAttributeValueError $data */
                $data = GraphQLDuplicateAttributeValueErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
