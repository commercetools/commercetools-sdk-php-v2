<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ImportSinkDraft>
 */
final class ImportSinkDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $resourceType;

    public function __construct()
    {
    }

    /**
     * <p>The version of this resource.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The unique key of the import sink.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The type of import resource sent to this import sink.</p>.
     *
     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    public function build(): ImportSinkDraft
    {
        return new ImportSinkDraftModel(
            $this->version,
            $this->key,
            $this->resourceType
        );
    }

    public static function of(): ImportSinkDraftBuilder
    {
        return new self();
    }
}
