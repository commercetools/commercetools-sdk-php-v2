<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Product\AttributeCollection;

/**
 * @implements Builder<DuplicateAttributeValuesError>
 */
final class DuplicateAttributeValuesErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): DuplicateAttributeValuesError
    {
        return new DuplicateAttributeValuesErrorModel(
            $this->message,
            $this->attributes
        );
    }

    public static function of(): DuplicateAttributeValuesErrorBuilder
    {
        return new self();
    }
}
