<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<QuoteRequestReference>
 * @method QuoteRequestReference current()
 * @method QuoteRequestReference end()
 * @method QuoteRequestReference at($offset)
 */
class QuoteRequestReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert QuoteRequestReference $value
     * @psalm-param QuoteRequestReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestReference
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestReference $data */
                $data = QuoteRequestReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
