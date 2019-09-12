<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\JsonObjectModel;

final class WhitespaceTokenizerModel extends JsonObjectModel implements WhitespaceTokenizer
{
    const DISCRIMINATOR_VALUE = 'whitespace';

    /**
     * @var ?string
     */
    protected $type;

    public function __construct(
        string $type = null
    ) {
        $this->type = $type;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SuggestTokenizer::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }
}
