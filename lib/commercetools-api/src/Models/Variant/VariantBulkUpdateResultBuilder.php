<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantBulkUpdateResult>
 */
final class VariantBulkUpdateResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Unique identifier of the Variant from the request. Present when the Variant was identified by <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Variant from the request. Present when the Variant was identified by <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): VariantBulkUpdateResult
    {
        return new VariantBulkUpdateResultModel(
            $this->id,
            $this->key
        );
    }

    public static function of(): VariantBulkUpdateResultBuilder
    {
        return new self();
    }
}
