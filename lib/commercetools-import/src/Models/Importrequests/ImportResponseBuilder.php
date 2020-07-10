<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Importoperations\ImportOperationStatusCollection;

/**
 * @implements Builder<ImportResponse>
 */
final class ImportResponseBuilder implements Builder
{
    /**
     * @var ?ImportOperationStatusCollection
     */
    private $operationStatus;

    /**
     * @return null|ImportOperationStatusCollection
     */
    public function getOperationStatus()
    {
        return $this->operationStatus;
    }

    /**
     * @return $this
     */
    public function withOperationStatus(?ImportOperationStatusCollection $operationStatus)
    {
        $this->operationStatus = $operationStatus;

        return $this;
    }


    public function build(): ImportResponse
    {
        return new ImportResponseModel(
            $this->operationStatus
        );
    }

    public static function of(): ImportResponseBuilder
    {
        return new self();
    }
}
