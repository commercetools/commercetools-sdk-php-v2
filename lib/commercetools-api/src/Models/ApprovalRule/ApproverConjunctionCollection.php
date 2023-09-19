<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ApproverConjunction>
 * @method ApproverConjunction current()
 * @method ApproverConjunction end()
 * @method ApproverConjunction at($offset)
 */
class ApproverConjunctionCollection extends MapperSequence
{
    /**
     * @psalm-assert ApproverConjunction $value
     * @psalm-param ApproverConjunction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApproverConjunctionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApproverConjunction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApproverConjunction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApproverConjunction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApproverConjunction $data */
                $data = ApproverConjunctionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
