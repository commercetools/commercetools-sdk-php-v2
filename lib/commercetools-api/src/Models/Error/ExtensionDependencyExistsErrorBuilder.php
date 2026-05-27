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

/**
 * @implements Builder<ExtensionDependencyExistsError>
 */
final class ExtensionDependencyExistsErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;The extension cannot be deleted because it is a prerequisite for: [ext-2, ext-3].&quot;</code></p>
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


    public function build(): ExtensionDependencyExistsError
    {
        return new ExtensionDependencyExistsErrorModel(
            $this->message
        );
    }

    public static function of(): ExtensionDependencyExistsErrorBuilder
    {
        return new self();
    }
}
