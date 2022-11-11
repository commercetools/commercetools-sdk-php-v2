<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<ExtensionPredicateEvaluationFailedError>
 * @method ExtensionPredicateEvaluationFailedError current()
 * @method ExtensionPredicateEvaluationFailedError end()
 * @method ExtensionPredicateEvaluationFailedError at($offset)
 */
class ExtensionPredicateEvaluationFailedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionPredicateEvaluationFailedError $value
     * @psalm-param ExtensionPredicateEvaluationFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionPredicateEvaluationFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionPredicateEvaluationFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionPredicateEvaluationFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionPredicateEvaluationFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionPredicateEvaluationFailedError $data */
                $data = ExtensionPredicateEvaluationFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
