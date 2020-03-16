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
     * @var ?ImportOperationStatusCollection
     */
    protected $operationStatus;


    public function __construct(
        ImportOperationStatusCollection $operationStatus = null
    ) {
        $this->operationStatus = $operationStatus;
    }

    /**
     * @return null|ImportOperationStatusCollection
     */
    public function getOperationStatus()
    {
        if (is_null($this->operationStatus)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportResponse::FIELD_OPERATION_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->operationStatus = ImportOperationStatusCollection::fromArray($data);
        }

        return $this->operationStatus;
    }

    public function setOperationStatus(?ImportOperationStatusCollection $operationStatus): void
    {
        $this->operationStatus = $operationStatus;
    }
}
