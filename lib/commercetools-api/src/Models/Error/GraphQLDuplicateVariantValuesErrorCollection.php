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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateVariantValuesError>
 * @method GraphQLDuplicateVariantValuesError current()
 * @method GraphQLDuplicateVariantValuesError end()
 * @method GraphQLDuplicateVariantValuesError at($offset)
 */
class GraphQLDuplicateVariantValuesErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateVariantValuesError $value
     * @psalm-param GraphQLDuplicateVariantValuesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateVariantValuesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateVariantValuesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateVariantValuesError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateVariantValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateVariantValuesError $data */
                $data = GraphQLDuplicateVariantValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
