<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<StagedQuote>
 * @method StagedQuote current()
 * @method StagedQuote end()
 * @method StagedQuote at($offset)
 */
class StagedQuoteCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert StagedQuote $value
     * @psalm-param StagedQuote|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuote) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuote
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuote {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuote $data */
                $data = StagedQuoteModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
