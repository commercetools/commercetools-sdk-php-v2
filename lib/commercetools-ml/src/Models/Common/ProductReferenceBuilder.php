<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductReference>
 */
final class ProductReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }


    public function build(): ProductReference
    {
        return new ProductReferenceModel(
            $this->id
        );
    }

    public static function of(): ProductReferenceBuilder
    {
        return new self();
    }
}
