<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InvalidFieldsUpdateError>
 */
final class InvalidFieldsUpdateErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?array
     */
    private $fields;

    /**
     * <p><code>&quot;The following fields are currently not supported for changes/updates&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Fields that cannot be updated.</p>
     *

     * @return null|array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?array $fields
     * @return $this
     */
    public function withFields(?array $fields)
    {
        $this->fields = $fields;

        return $this;
    }


    public function build(): InvalidFieldsUpdateError
    {
        return new InvalidFieldsUpdateErrorModel(
            $this->message,
            $this->fields
        );
    }

    public static function of(): InvalidFieldsUpdateErrorBuilder
    {
        return new self();
    }
}
