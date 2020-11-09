<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SemanticErrorError>
 * @method SemanticErrorError current()
 * @method SemanticErrorError at($offset)
 */
class SemanticErrorErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert SemanticErrorError $value
     * @psalm-param SemanticErrorError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SemanticErrorErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SemanticErrorError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SemanticErrorError
     */
    protected function mapper()
    {
        return function (int $index): ?SemanticErrorError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SemanticErrorErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
