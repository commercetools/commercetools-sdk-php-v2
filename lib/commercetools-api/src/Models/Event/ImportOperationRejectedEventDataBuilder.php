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
 * @implements Builder<ImportOperationRejectedEventData>
 */
final class ImportOperationRejectedEventDataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**
     * <p>The <code>id</code> of the Import Operation with the <code>rejected</code> state.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
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


    public function build(): ImportOperationRejectedEventData
    {
        return new ImportOperationRejectedEventDataModel(
            $this->id
        );
    }

    public static function of(): ImportOperationRejectedEventDataBuilder
    {
        return new self();
    }
}
