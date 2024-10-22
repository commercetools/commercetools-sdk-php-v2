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
 * @implements Builder<NewMasterVariantAdditionNotAllowedError>
 */
final class NewMasterVariantAdditionNotAllowedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;Adding a new variant as master variant is not allowed.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
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


    public function build(): NewMasterVariantAdditionNotAllowedError
    {
        return new NewMasterVariantAdditionNotAllowedErrorModel(
            $this->message
        );
    }

    public static function of(): NewMasterVariantAdditionNotAllowedErrorBuilder
    {
        return new self();
    }
}
