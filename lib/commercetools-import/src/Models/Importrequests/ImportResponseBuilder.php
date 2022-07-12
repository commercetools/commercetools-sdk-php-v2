<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Importoperations\ImportOperationStatusCollection;
use stdClass;

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
     * @param ?ImportOperationStatusCollection $operationStatus
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
