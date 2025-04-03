<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportContainerDeletedEventData>
 */
final class ImportContainerDeletedEventDataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?int
     */
    private $version;

    /**
     * <p>The <code>key</code> of the deleted Import Container.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The <code>version</code> of the deleted Import Container.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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


    public function build(): ImportContainerDeletedEventData
    {
        return new ImportContainerDeletedEventDataModel(
            $this->key,
            $this->version
        );
    }

    public static function of(): ImportContainerDeletedEventDataBuilder
    {
        return new self();
    }
}
