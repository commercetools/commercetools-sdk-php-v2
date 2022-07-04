<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<QuoteReference>
 * @method QuoteReference current()
 * @method QuoteReference end()
 * @method QuoteReference at($offset)
 */
class QuoteReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert QuoteReference $value
     * @psalm-param QuoteReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteReference
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteReference $data */
                $data = QuoteReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
