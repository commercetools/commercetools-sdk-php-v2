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
 * @extends MapperSequence<StagedQuoteUpdate>
 * @method StagedQuoteUpdate current()
 * @method StagedQuoteUpdate end()
 * @method StagedQuoteUpdate at($offset)
 */
class StagedQuoteUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedQuoteUpdate $value
     * @psalm-param StagedQuoteUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteUpdate $data */
                $data = StagedQuoteUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
