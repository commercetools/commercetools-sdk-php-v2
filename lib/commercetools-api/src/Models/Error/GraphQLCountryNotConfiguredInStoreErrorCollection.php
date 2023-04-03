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
 * @extends GraphQLErrorObjectCollection<GraphQLCountryNotConfiguredInStoreError>
 * @method GraphQLCountryNotConfiguredInStoreError current()
 * @method GraphQLCountryNotConfiguredInStoreError end()
 * @method GraphQLCountryNotConfiguredInStoreError at($offset)
 */
class GraphQLCountryNotConfiguredInStoreErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLCountryNotConfiguredInStoreError $value
     * @psalm-param GraphQLCountryNotConfiguredInStoreError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLCountryNotConfiguredInStoreErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLCountryNotConfiguredInStoreError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLCountryNotConfiguredInStoreError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLCountryNotConfiguredInStoreError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLCountryNotConfiguredInStoreError $data */
                $data = GraphQLCountryNotConfiguredInStoreErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
