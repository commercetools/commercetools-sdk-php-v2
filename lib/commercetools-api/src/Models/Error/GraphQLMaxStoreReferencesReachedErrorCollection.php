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
 * @extends GraphQLErrorObjectCollection<GraphQLMaxStoreReferencesReachedError>
 * @method GraphQLMaxStoreReferencesReachedError current()
 * @method GraphQLMaxStoreReferencesReachedError end()
 * @method GraphQLMaxStoreReferencesReachedError at($offset)
 */
class GraphQLMaxStoreReferencesReachedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMaxStoreReferencesReachedError $value
     * @psalm-param GraphQLMaxStoreReferencesReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMaxStoreReferencesReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMaxStoreReferencesReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMaxStoreReferencesReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMaxStoreReferencesReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMaxStoreReferencesReachedError $data */
                $data = GraphQLMaxStoreReferencesReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
