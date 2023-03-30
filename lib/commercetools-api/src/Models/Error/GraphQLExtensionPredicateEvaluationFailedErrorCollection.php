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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionPredicateEvaluationFailedError>
 * @method GraphQLExtensionPredicateEvaluationFailedError current()
 * @method GraphQLExtensionPredicateEvaluationFailedError end()
 * @method GraphQLExtensionPredicateEvaluationFailedError at($offset)
 */
class GraphQLExtensionPredicateEvaluationFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionPredicateEvaluationFailedError $value
     * @psalm-param GraphQLExtensionPredicateEvaluationFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionPredicateEvaluationFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionPredicateEvaluationFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionPredicateEvaluationFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionPredicateEvaluationFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionPredicateEvaluationFailedError $data */
                $data = GraphQLExtensionPredicateEvaluationFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
