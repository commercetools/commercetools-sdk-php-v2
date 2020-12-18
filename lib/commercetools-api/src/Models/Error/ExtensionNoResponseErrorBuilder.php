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
 * @implements Builder<ExtensionNoResponseError>
 */
final class ExtensionNoResponseErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $extensionId;

    /**
     * @var ?string
     */
    private $extensionKey;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * @return null|string
     */
    public function getExtensionKey()
    {
        return $this->extensionKey;
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
     * @param ?string $extensionId
     * @return $this
     */
    public function withExtensionId(?string $extensionId)
    {
        $this->extensionId = $extensionId;

        return $this;
    }

    /**
     * @param ?string $extensionKey
     * @return $this
     */
    public function withExtensionKey(?string $extensionKey)
    {
        $this->extensionKey = $extensionKey;

        return $this;
    }


    public function build(): ExtensionNoResponseError
    {
        return new ExtensionNoResponseErrorModel(
            $this->message,
            $this->extensionId,
            $this->extensionKey
        );
    }

    public static function of(): ExtensionNoResponseErrorBuilder
    {
        return new self();
    }
}
