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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateEnumValuesError>
 * @method GraphQLDuplicateEnumValuesError current()
 * @method GraphQLDuplicateEnumValuesError end()
 * @method GraphQLDuplicateEnumValuesError at($offset)
 */
class GraphQLDuplicateEnumValuesErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateEnumValuesError $value
     * @psalm-param GraphQLDuplicateEnumValuesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateEnumValuesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateEnumValuesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateEnumValuesError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateEnumValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateEnumValuesError $data */
                $data = GraphQLDuplicateEnumValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
