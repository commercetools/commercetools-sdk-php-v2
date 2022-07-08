<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedQuoteDraft>
 * @method StagedQuoteDraft current()
 * @method StagedQuoteDraft end()
 * @method StagedQuoteDraft at($offset)
 */
class StagedQuoteDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedQuoteDraft $value
     * @psalm-param StagedQuoteDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteDraft $data */
                $data = StagedQuoteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
