<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\Builder;

/**
 * @implements Builder<WhitespaceTokenizer>
 */
final class WhitespaceTokenizerBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): WhitespaceTokenizer
    {
        return new WhitespaceTokenizerModel(
            $this->type
        );
    }

    public static function of(): WhitespaceTokenizerBuilder
    {
        return new self();
    }
}
