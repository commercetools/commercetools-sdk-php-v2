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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateAttributeValuesError>
 * @method GraphQLDuplicateAttributeValuesError current()
 * @method GraphQLDuplicateAttributeValuesError end()
 * @method GraphQLDuplicateAttributeValuesError at($offset)
 */
class GraphQLDuplicateAttributeValuesErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateAttributeValuesError $value
     * @psalm-param GraphQLDuplicateAttributeValuesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateAttributeValuesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateAttributeValuesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateAttributeValuesError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateAttributeValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateAttributeValuesError $data */
                $data = GraphQLDuplicateAttributeValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
