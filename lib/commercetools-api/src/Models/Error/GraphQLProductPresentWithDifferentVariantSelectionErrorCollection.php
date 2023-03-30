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
 * @extends GraphQLErrorObjectCollection<GraphQLProductPresentWithDifferentVariantSelectionError>
 * @method GraphQLProductPresentWithDifferentVariantSelectionError current()
 * @method GraphQLProductPresentWithDifferentVariantSelectionError end()
 * @method GraphQLProductPresentWithDifferentVariantSelectionError at($offset)
 */
class GraphQLProductPresentWithDifferentVariantSelectionErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLProductPresentWithDifferentVariantSelectionError $value
     * @psalm-param GraphQLProductPresentWithDifferentVariantSelectionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLProductPresentWithDifferentVariantSelectionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLProductPresentWithDifferentVariantSelectionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLProductPresentWithDifferentVariantSelectionError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLProductPresentWithDifferentVariantSelectionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLProductPresentWithDifferentVariantSelectionError $data */
                $data = GraphQLProductPresentWithDifferentVariantSelectionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
