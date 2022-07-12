<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryKeyReference>
 */
final class TaxCategoryKeyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): TaxCategoryKeyReference
    {
        return new TaxCategoryKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): TaxCategoryKeyReferenceBuilder
    {
        return new self();
    }
}
