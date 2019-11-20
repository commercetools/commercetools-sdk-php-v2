<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomTokenizer>
 */
final class CustomTokenizerBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $inputs;

    /**
     * @return null|array
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * @return $this
     */
    public function withInputs(?array $inputs)
    {
        $this->inputs = $inputs;

        return $this;
    }

    public function build(): CustomTokenizer
    {
        return new CustomTokenizerModel(
            $this->inputs
        );
    }

    public static function of(): CustomTokenizerBuilder
    {
        return new self();
    }
}
