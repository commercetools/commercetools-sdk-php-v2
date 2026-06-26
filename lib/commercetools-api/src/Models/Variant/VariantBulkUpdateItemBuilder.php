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
 * @implements Builder<VariantBulkUpdateItem>
 */
final class VariantBulkUpdateItemBuilder implements Builder
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

     * @var ?int
     */
    private $version;

    /**
     * <p>Unique identifier of the Variant to update. Either <code>id</code> or <code>key</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Variant to update. Either <code>id</code> or <code>key</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Expected version of the Variant. Required when the <code>versionControl</code> query parameter is <code>On</code> (the default).
     * If the version does not match, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error is returned for that item.
     * Not required when <code>versionControl=Off</code>.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }


    public function build(): VariantBulkUpdateItem
    {
        return new VariantBulkUpdateItemModel(
            $this->id,
            $this->key,
            $this->version
        );
    }

    public static function of(): VariantBulkUpdateItemBuilder
    {
        return new self();
    }
}
