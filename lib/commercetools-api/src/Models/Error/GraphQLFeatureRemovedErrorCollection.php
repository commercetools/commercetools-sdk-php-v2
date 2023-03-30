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
 * @extends GraphQLErrorObjectCollection<GraphQLFeatureRemovedError>
 * @method GraphQLFeatureRemovedError current()
 * @method GraphQLFeatureRemovedError end()
 * @method GraphQLFeatureRemovedError at($offset)
 */
class GraphQLFeatureRemovedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLFeatureRemovedError $value
     * @psalm-param GraphQLFeatureRemovedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLFeatureRemovedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLFeatureRemovedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLFeatureRemovedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLFeatureRemovedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLFeatureRemovedError $data */
                $data = GraphQLFeatureRemovedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
