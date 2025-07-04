<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Importoperations\ImportOperationStatusCollection;
use stdClass;

/**
 * @internal
 */
final class ImportResponseModel extends JsonObjectModel implements ImportResponse
{
    /**
     *
     * @var ?ImportOperationStatusCollection
     */
    protected $operationStatus;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ImportOperationStatusCollection $operationStatus = null
    ) {
        $this->operationStatus = $operationStatus;
    }

    /**
     * <p>The identifiers and status of the <a href="ctp:import:type:ImportOperation">ImportOperations</a> created by the ImportRequest.</p>
     *
     *
     * @return null|ImportOperationStatusCollection
     */
    public function getOperationStatus()
    {
        if (is_null($this->operationStatus)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OPERATION_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->operationStatus = ImportOperationStatusCollection::fromArray($data);
        }

        return $this->operationStatus;
    }


    /**
     * @param ?ImportOperationStatusCollection $operationStatus
     */
    public function setOperationStatus(?ImportOperationStatusCollection $operationStatus): void
    {
        $this->operationStatus = $operationStatus;
    }
}
