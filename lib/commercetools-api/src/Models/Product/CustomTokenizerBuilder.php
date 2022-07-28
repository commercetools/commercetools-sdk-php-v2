<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Contains custom tokens.</p>
     *

     * @return null|array
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * @param ?array $inputs
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
