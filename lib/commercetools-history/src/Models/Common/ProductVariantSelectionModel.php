<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantSelectionModel extends JsonObjectModel implements ProductVariantSelection
{


    /**
     *
     * @var ?string
     */
    protected $type;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null
    ) {
        $this->type = $type;

    }

    /**
     * <p>Determines whether the SKUs are to be included in, or excluded from, the Product Selection.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }


    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }



}
