<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReturnInfoDraft>
 * @method ReturnInfoDraft current()
 * @method ReturnInfoDraft end()
 * @method ReturnInfoDraft at($offset)
 */
class ReturnInfoDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ReturnInfoDraft $value
     * @psalm-param ReturnInfoDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnInfoDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnInfoDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnInfoDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnInfoDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnInfoDraft $data */
                $data = ReturnInfoDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
