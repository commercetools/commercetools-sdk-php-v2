<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImportValidationFailedEventDataModel extends JsonObjectModel implements ImportValidationFailedEventData
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?string
     */
    protected $importContainerKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?string $importContainerKey = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->importContainerKey = $importContainerKey;
    }

    /**
     * <p>The <code>id</code> of the Import Operation with the <code>validationFailed</code> state.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The <code>version</code> of the Import Operation with the <code>validationFailed</code> state.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The <code>key</code> of the Import Container.</p>
     *
     *
     * @return null|string
     */
    public function getImportContainerKey()
    {
        if (is_null($this->importContainerKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_IMPORT_CONTAINER_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->importContainerKey = (string) $data;
        }

        return $this->importContainerKey;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $importContainerKey
     */
    public function setImportContainerKey(?string $importContainerKey): void
    {
        $this->importContainerKey = $importContainerKey;
    }
}
