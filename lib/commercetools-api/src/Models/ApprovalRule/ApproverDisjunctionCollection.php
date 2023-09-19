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
 * @extends MapperSequence<ApproverDisjunction>
 * @method ApproverDisjunction current()
 * @method ApproverDisjunction end()
 * @method ApproverDisjunction at($offset)
 */
class ApproverDisjunctionCollection extends MapperSequence
{
    /**
     * @psalm-assert ApproverDisjunction $value
     * @psalm-param ApproverDisjunction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApproverDisjunctionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApproverDisjunction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApproverDisjunction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApproverDisjunction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApproverDisjunction $data */
                $data = ApproverDisjunctionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
