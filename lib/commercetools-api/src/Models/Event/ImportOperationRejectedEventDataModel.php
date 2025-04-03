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
final class ImportOperationRejectedEventDataModel extends JsonObjectModel implements ImportOperationRejectedEventData
{
    /**
     *
     * @var ?string
     */
    protected $id;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null
    ) {
        $this->id = $id;
    }

    /**
     * <p>The <code>id</code> of the Import Operation with the <code>rejected</code> state.</p>
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
