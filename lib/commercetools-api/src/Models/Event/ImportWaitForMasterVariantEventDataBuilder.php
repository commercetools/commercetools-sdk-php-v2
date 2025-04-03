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
 * @implements Builder<ImportWaitForMasterVariantEventData>
 */
final class ImportWaitForMasterVariantEventDataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?string
     */
    private $importContainerKey;

    /**
     * <p>The <code>id</code> of the Import Operation with the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The <code>version</code> of the Import Operation with the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The <code>key</code> of the Import Container.</p>
     *

     * @return null|string
     */
    public function getImportContainerKey()
    {
        return $this->importContainerKey;
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
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?string $importContainerKey
     * @return $this
     */
    public function withImportContainerKey(?string $importContainerKey)
    {
        $this->importContainerKey = $importContainerKey;

        return $this;
    }


    public function build(): ImportWaitForMasterVariantEventData
    {
        return new ImportWaitForMasterVariantEventDataModel(
            $this->id,
            $this->version,
            $this->importContainerKey
        );
    }

    public static function of(): ImportWaitForMasterVariantEventDataBuilder
    {
        return new self();
    }
}
