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
 * @extends GraphQLErrorObjectCollection<GraphQLLanguageUsedInStoresError>
 * @method GraphQLLanguageUsedInStoresError current()
 * @method GraphQLLanguageUsedInStoresError end()
 * @method GraphQLLanguageUsedInStoresError at($offset)
 */
class GraphQLLanguageUsedInStoresErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLLanguageUsedInStoresError $value
     * @psalm-param GraphQLLanguageUsedInStoresError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLLanguageUsedInStoresErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLLanguageUsedInStoresError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLLanguageUsedInStoresError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLLanguageUsedInStoresError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLLanguageUsedInStoresError $data */
                $data = GraphQLLanguageUsedInStoresErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
