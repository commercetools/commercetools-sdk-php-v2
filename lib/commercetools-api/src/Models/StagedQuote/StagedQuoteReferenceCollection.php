<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<StagedQuoteReference>
 * @method StagedQuoteReference current()
 * @method StagedQuoteReference end()
 * @method StagedQuoteReference at($offset)
 */
class StagedQuoteReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert StagedQuoteReference $value
     * @psalm-param StagedQuoteReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteReference
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteReference $data */
                $data = StagedQuoteReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
