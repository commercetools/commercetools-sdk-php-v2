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
 * @extends GraphQLErrorObjectCollection<GraphQLExternalOAuthFailedError>
 * @method GraphQLExternalOAuthFailedError current()
 * @method GraphQLExternalOAuthFailedError end()
 * @method GraphQLExternalOAuthFailedError at($offset)
 */
class GraphQLExternalOAuthFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExternalOAuthFailedError $value
     * @psalm-param GraphQLExternalOAuthFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExternalOAuthFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExternalOAuthFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExternalOAuthFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExternalOAuthFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExternalOAuthFailedError $data */
                $data = GraphQLExternalOAuthFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
